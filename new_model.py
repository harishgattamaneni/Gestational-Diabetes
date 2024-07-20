import streamlit as st
import pandas as pd
import joblib
import mysql.connector

# Load the trained model, imputer, and scaler from files
model_path = '/Users/harishgattamaneni/linear_regression_model.pkl'
imputer_path = '/Users/harishgattamaneni/imputer.pkl'
scaler_path = '/Users/harishgattamaneni/scaler.pkl'
model = joblib.load(model_path)
imputer = joblib.load(imputer_path)
scaler = joblib.load(scaler_path)

# Web-page for the web-app
st.title("Gestational Diabetes Mellitus (GDM) Prediction")
st.subheader("Enter expectant mother's information and submit for predicting GDM likelihood")

# Form to collect inputs
with st.form(key='my_form'):
    user_id = st.text_input('User ID')  # New input field for User ID
    username = st.text_input('Username')  # New input field for Username
    age = st.number_input('Age', min_value=10, max_value=100, value=10, step=1)
    no_of_pregnancy = st.number_input('Number of pregnancies', min_value=0, max_value=20, value=0, step=1)
    gestation_in_previous_pregnancy = st.radio('Gestation in previous pregnancy?', ('No', 'Yes - Once', 'Yes - More than once'))
    bmi = st.number_input('Body Mass Index (BMI)', min_value=9.0, max_value=65.0, value=20.0, step=0.1)
    hdl = st.number_input('High Density Lipoprotein (HDL)', min_value=10, max_value=100, value=50, step=1)
    family_history = st.radio(label='Family history of Diabetes?', options=["No", "Yes"])
    unexplained_prenatal_loss = st.radio(label='Unexplained prenatal loss in previous pregnancies?', options=["No", "Yes"])
    large_child_or_birth_default = st.radio(label='Large Child (current pregnancy)?', options=["No", "Yes"])
    pcos = st.radio(label='Poly-cystic Ovarian Syndrome (PCOS)?', options=["No", "Yes"])
    sys_bp = st.number_input('Systolic Blood Pressure (mmHg)', min_value=100, max_value=200, value=100, step=1)
    dia_bp = st.number_input('Diastolic Blood Pressure (mmHg)', min_value=60, max_value=120, value=65, step=1)
    ogtt = st.number_input('Oral Glucose Tolerance Test (mg/dL)', min_value=50, max_value=400, value=200, step=1)
    hemoglobin = st.number_input('Hemoglobin (HB) value', min_value=10.0, max_value=20.0, value=11.0, step=0.1)
    sedentary_lifestyle = st.radio(label='Sedentary lifestyle?', options=["No", "Yes"])
    prediabetes = st.radio(label='Diabetes before pregnancy?', options=["No", "Yes"])
    submit_button = st.form_submit_button(label='Submit for Prediction')

if submit_button:
    # Check if user_id and username are provided
    if not user_id or not username:
        st.error("User ID and Username are required.")
    else:
        # Verify the user ID and username
        try:
            # Connect to the database
            conn = mysql.connector.connect(
                host='localhost',
                user='root',
                password='',
                database='login_system'
            )
            cursor = conn.cursor()

            # Query to verify user ID and username
            cursor.execute("SELECT username FROM users WHERE id = %s", (user_id,))
            result = cursor.fetchone()

            # Convert string values to numeric values
            gestation_in_previous_pregnancy = 2 if gestation_in_previous_pregnancy == 'Yes - More than once' else 1 if gestation_in_previous_pregnancy == 'Yes - Once' else 0
            family_history = 1 if family_history == 'Yes' else 0
            unexplained_prenatal_loss = 1 if unexplained_prenatal_loss == 'Yes' else 0
            large_child_or_birth_default = 1 if large_child_or_birth_default == 'Yes' else 0
            pcos = 1 if pcos == 'Yes' else 0
            sedentary_lifestyle = 1 if sedentary_lifestyle == 'Yes' else 0
            prediabetes = 1 if prediabetes == 'Yes' else 0

            # Storing input data in a DataFrame with consistent feature names
            input_df = pd.DataFrame({
                "age": [age],
                "no_of_pregnancy": [no_of_pregnancy],
                "gestation_in_previous_pregnancy": [gestation_in_previous_pregnancy],
                "bmi": [bmi],
                "hdl": [hdl],
                "family_history": [family_history],
                "unexplained_prenatal_loss": [unexplained_prenatal_loss],
                "large_child_or_birth_default": [large_child_or_birth_default],
                "pcos": [pcos],
                "sys_bp": [sys_bp],
                "dia_bp": [dia_bp],
                "ogtt": [ogtt],
                "hemoglobin": [hemoglobin],
                "sedentary_lifestyle": [sedentary_lifestyle],
                "prediabetes": [prediabetes]
            })

            # Apply the imputer and scaler to input data
            input_df_imputed = imputer.transform(input_df)
            input_df_scaled = scaler.transform(input_df_imputed)

            # Apply the model to input data and extract prediction
            prediction = model.predict(input_df_scaled)

            # Output prediction
            st.subheader(f"Based on the information provided, the predicted value of GDM likelihood is: {prediction[0]:.2f}")

            if result and result[0] == username:
                # Save the form data and prediction result to the database
                cursor.execute("SELECT id FROM form_submissions WHERE user_id = %s", (user_id,))
                result = cursor.fetchone()

                if result:
                    # Update the existing record
                    sql = '''UPDATE form_submissions SET 
                                age=%s, no_of_pregnancy=%s, gestation_in_previous_pregnancy=%s, bmi=%s, hdl=%s, family_history=%s,
                                unexplained_prenatal_loss=%s, large_child_or_birth_default=%s, pcos=%s, sys_bp=%s, dia_bp=%s,
                                ogtt=%s, hemoglobin=%s, sedentary_lifestyle=%s, prediabetes=%s, prediction=%s
                             WHERE user_id=%s'''
                    values = (
                        age, no_of_pregnancy, gestation_in_previous_pregnancy, bmi, hdl, family_history,
                        unexplained_prenatal_loss, large_child_or_birth_default, pcos, sys_bp, dia_bp, ogtt,
                        hemoglobin, sedentary_lifestyle, prediabetes, prediction[0], user_id
                    )
                    cursor.execute(sql, values)
                    conn.commit()
                    st.success("Data updated successfully!")
                else:
                    # Insert a new record
                    sql = '''INSERT INTO form_submissions (
                                user_id, age, no_of_pregnancy, gestation_in_previous_pregnancy, bmi, hdl, family_history,
                                unexplained_prenatal_loss, large_child_or_birth_default, pcos, sys_bp, dia_bp, ogtt,
                                hemoglobin, sedentary_lifestyle, prediabetes, prediction
                                ) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)
                            '''
                    values = (
                        user_id, age, no_of_pregnancy, gestation_in_previous_pregnancy, bmi, hdl, family_history,
                        unexplained_prenatal_loss, large_child_or_birth_default, pcos, sys_bp, dia_bp, ogtt,
                        hemoglobin, sedentary_lifestyle, prediabetes, prediction[0]
                    )
                    cursor.execute(sql, values)
                    conn.commit()
                    st.success("Data saved successfully!")
            else:
                st.error("User ID and Username do not match.")

        except mysql.connector.Error as err:
            st.error(f"Error: {err}")
        finally:
            if cursor:
                cursor.close()
            if conn:
                conn.close()

        # Define the base URL of the HTML page
        html_page_base_url = "http://localhost/HealthiHer-main/"

        # Define the section IDs
        sections = {
            "about": "infoSection-1",
            "info": "infoSection-2",
            "banner": "infoSection-3"
        }

        # Define the probabilities for redirection
        probabilities = {
            "about": 0.4,
            "info": 0.6
        }

        # Determine the section to redirect to based on probability
        if prediction[0] < probabilities["about"]:
            section_id = sections["about"]
        elif probabilities["about"] <= prediction[0] < probabilities["info"]:
            section_id = sections["info"]
        else:
            section_id = sections["banner"]

        # Define the full URL including the section ID
        html_page_url = f"{html_page_base_url}#{section_id}"

        # Custom HTML around the hyperlink
        st.markdown('<div style="padding: 10px; background-color: #f0f0f0; border-radius: 5px;">'
                    '<a href="{}" target="_blank" style="text-decoration: none; color: #333333;">'
                    'Go to Section'
                    '</a>'
                    '</div>'.format(html_page_url), unsafe_allow_html=True)