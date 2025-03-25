*** Settings ***
Library    SeleniumLibrary
Library    RequestsLibrary
Library    DatabaseLibrary
Library    JSONLibrary
Library    OperatingSystem
Library    Collections
Suite Setup    Open Browser    ${URL}    chrome
Suite Teardown    Close Browser

# bc397



*** Variables ***
${URL}   https://dev.cekpremistage.com/sit/bes/login
${BROWSER}    chrome
${H1_ELEMENT}    xpath=//div[@class='rpbi-info']/h1
${DB_HOST}    localhost
${DB_NAME}    db_games
${DB_USER}    root
${DB_PASSWORD}    
${DB_PORT}    3306
# ${SPAN_ELEMENTS}    xpath=//div[@id='tagList']//span

*** Test Cases ***
Valid Login Test
    [Documentation]  
    Maximize Browser Window
    Sleep  3s
    Input Text    name=email     dyah@gmail.com
    Sleep  3s
    Input Password    name=password    password
    Sleep  3s
    Click Element    xpath=//button[text()='Login']
    # Sleep  3s
    # Go To   https://dev.cekpremistage.com/sit/bes/my-data/today
    # Sleep  3s 
    # Click Element    xpath=//*[@data-tw-target='#modal-new-leads']
    # Sleep  3s
    # Input Text    id=modal-check-phone-number     082111371287
    # Click Button     id=checkPhone
    # Sleep  3s
    # Select Checkbox    id=checkBoxUser
    # Sleep    3s
    # Select From List By Value    id=modal-form-6    1
    # Sleep    3s
    # Select From List By Value    id=leadSourceSelect    3
    # Click Button  id=btn_send
    Sleep    3s
    Go To    https://dev.cekpremistage.com/sit/bes/car-insurance/product-catalogue/calculate/37734050-b7fc-4841-9425-6c145e61204c
    Sleep    3s
    Execute JavaScript    document.querySelector('[data-value="AUDI"]').setAttribute("data-value", "TOYOTA")
    Execute JavaScript    document.querySelector('[data-value="TOYOTA"]').innerText = "TOYOTA"
    Sleep  15s  
# Connect to MySQL
#     Connect To Database    pymysql    ${DB_NAME}    ${DB_USER}    ${DB_PASSWORD}    ${DB_HOST}    ${DB_PORT}
#     ${result}    Query    SELECT phone from phone where status is false order BY id ASC;
#     FOR    ${row}    IN    @{result}
#     Input Text    name=phoneNumber    ${row}[0]
#     Click Element  id=submitButton
#     Wait Until Element Is Visible    ${H1_ELEMENT}    timeout=10s
#     ${h1_text}    Get Text    ${H1_ELEMENT}
#     Sleep  3s
#     Execute Sql String    UPDATE phone SET nama= '${h1_text}' ,email = 'berhasil' WHERE phone=${row}[0];
    
#     Sleep  7s
#     ${element_exists}=    Run Keyword And Return Status  Execute JavaScript    document.querySelector(".rbi-link").click();
    
#     IF    ${element_exists} == True
#         Wait Until Element Is Visible    xpath=//span[contains(@class, 'rtl-item')]    timeout=10s
#         @{span_elements}    Get WebElements    xpath=//span[contains(@class, 'rtl-item')]
#         ${all_text}    Set Variable    ${EMPTY}
#         FOR    ${element}    IN    @{span_elements}
#             ${text}    Get Text    ${element}
#             ${all_text}    Set Variable    ${all_text} ${text}, 
             
#             # Log    ${text}                        
#         END
       
#         Sleep  3s
#         Execute Sql String    UPDATE phone SET hasil= "${all_text}" ,status = true WHERE phone= ${row}[0];
    
#     ELSE
#         Execute Sql String    UPDATE phone SET nama= '${h1_text}' ,status = true ,email = 'berhasil' WHERE phone=${row}[0];
    
#     END
    
      
#     END
    
    
#     Sleep  7s  
    