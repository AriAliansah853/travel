*** Settings ***
Library    SeleniumLibrary
Library    RequestsLibrary
Library    DatabaseLibrary
Library    JSONLibrary
Library    OperatingSystem
Library    Collections
Library    String
Suite Setup    Open Browser    ${URL}    chrome
Suite Teardown    Close Browser

# bc397



*** Variables ***
${URL}   https://web.getcontact.com/
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
    Sleep  20s  
Connect to MySQL
    Connect To Database    pymysql    ${DB_NAME}    ${DB_USER}    ${DB_PASSWORD}    ${DB_HOST}    ${DB_PORT}
    ${result}    Query    SELECT phone from phone3 where status is false order BY id ASC;
    FOR    ${row}    IN    @{result}
    Input Text    name=phoneNumber    ${row}[0]
    Click Element  id=submitButton
    Wait Until Element Is Visible    ${H1_ELEMENT}    timeout=10s
    ${h1_text}    Get Text    ${H1_ELEMENT}
    Sleep  3s
    Execute Sql String    UPDATE phone3 SET nama= '${h1_text}' ,email = 'berhasil' WHERE phone=${row}[0];
    
    # Sleep  7s
    # ${element_exists}=    Run Keyword And Return Status  Execute JavaScript    document.querySelector(".rbi-link").click();
    
    # IF    ${element_exists} == True
    #     Wait Until Element Is Visible    xpath=//span[contains(@class, 'rtl-item')]    timeout=10s
    #     @{span_elements}    Get WebElements    xpath=//span[contains(@class, 'rtl-item')]
    #     ${all_text}    Set Variable    ${EMPTY}
    #     FOR    ${element}    IN    @{span_elements}
    #         ${text}    Get Text    ${element}
    #         ${text}    Replace String    ${text}    "    ${EMPTY}
    #         ${all_text}    Set Variable    ${all_text} ${text}, 
             
    #         # Log    ${text}                        
    #     END
       
    #     Sleep  3s
    #     Execute Sql String    UPDATE phone3 SET hasil= "${all_text}" ,status = true WHERE phone= ${row}[0];
    
    # ELSE
    #     Execute Sql String    UPDATE phone3 SET nama= '${h1_text}' ,status = true ,email = 'berhasil' WHERE phone=${row}[0];
    
    # END
    
      
    END
    
    
    Sleep  7s  
    