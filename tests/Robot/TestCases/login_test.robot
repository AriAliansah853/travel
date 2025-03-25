*** Settings ***
Library    SeleniumLibrary
Library    RequestsLibrary
Library    DatabaseLibrary
Library    JSONLibrary
# Library    OperatingSystem
Library    Collections
Suite Setup    Open Browser    ${URL}    chrome
Suite Teardown    Close Browser

# bc397

*** Variables ***
${BASE_URL}    https://boss.fuse.co.id  
${ENDPOINT}    /api/oms/slip/v2/list         
${FUSETOKEN}   eyJhbGciOiJIUzI1NiIsInppcCI6IkRFRiJ9.eNrcWFtv2zYU_iuCnhmAN1FS3hp73YIubeasGTYEMBiZTrjKkqtLM6Pof98RKdmkLK9o1wHNojxY5zskz42H-vgxbFQhi2apV-E5wRgLQVFYt_fheZipEmMSorDcqsIohD__yMU8fv1qPp__AUBbq2pZlbkCtAb441346vfZQn3Q6klVd-G5eQ8OAnQXvtSwXqZlrou60U3b6LIwmnsguHQRGHIli1bmc13ft1WtNqpovCUsHLi4v-Qsl3qzUO9bVTf9GCMKHBmo_VCsyqn5Hbk_72UBQwuZz8qigSi8WG20dWUAgh4JegjGzMus7Waaq1x_UNWuN6G0Sw1oMMCBg8Po32Seq-b2YJsVBLcjZ3-SxSr3XN1LQOWm3arqYK15dUxcqHVbrK6rMlN13RtmZYEjBEUzpBfp4uHNeq2zflEDBQcs2IMm0JDe3TIrNxsNaFksKz_eHQyxG2A_6k46IPPyYSJLe_lxkrzMHuXJW2jknrvYkXvuiov1-1HwXv4yipzJSVY7-Znd2LEbO-LKpls3j6tKPsm8LwPP-gM6VIlv_7WsmkJVkN5tWTVvt3kpu6yWazO6R4MePrN40CtYN1yXOyf8uNaz8m2xUtVTpZt9QEEYeNIpN9x5J7zwgmkKz_O7r8WRr7su8xc6z0ep6pGgh_6pNtxhR6XhjuvnNLF60a70sH2HtQwQ7BEYobqa1qq-kMW7y2Jd3o7KHaCgw4IOPNrOrmG2XFxrZnKzlfqh8ItukI4qz2tybkf0u5zbF4eZvCTsp_fS0NXtoXxHBThUBWRhsgIDXwMm-LVSsm6r3aFXDZKhXX2CUyjrItJ1k60sdsu2O6jOyFiclSsVnhdtng_HlqrLtsrU8n7XqO7woljQKIpJwhDhccIFYSxCVCScRTyiiOJUpElCBCIJoZzxlHMEKgCCHjYP6MQEdLHzEBBhbn_imMUsjWMBLwLESSI49rSFiBKOBUewhkhjf6rDIjROJhAiWMIn5GYU4SIVuFMgxNoSJzGOUorYiSGfe3qnSMxTQjFGURKDa5EwADjX_SfwSgTBglDwHELHRILJVy1H6OcU0t57QmmS9DLMk8jE-_t7pqrlyx8RRcydQ9CU8Eh8yRQJSb_GighyGeOU0P88UoxhLjDp0kgYTmlivP5WWRW2HgnjlMRdwZolaSyS77Js_tUD_bLZbaEVMuiQZQtn2-7SfvoTBnEIN2X2rhO4nbL7wN93SQhPRFIbt76DfaMNYLsXdFZofMIpadNjOaPPPPSCcP6c7CUdGWQUzgyTAcGTGGTOtufPNhUkiulQt_Ajpv-_ff4sOlHfgGbm2yy8nINIZka4LORGuXcQdVZ2Xcu9X0BTVwno9GUB8u8B0ATfR1OUHp3k7Mjl48hl3ujAsdGIT6Np2oxOs2J0THnRCVqLpkkrcjkp6tknWmzQSYaJTrJHdCCGaEwC0Smqh3wehyb5GprmY2iCbqFpQoVcuoSOiBGaYj9ozG_Q4gqdpi7IIyWhPTFfm2q1Z6b6awvnacxJymLBKZT0djtcr3GMQaBlYzUYo0mn8WejobQlpymTqTpTGeVnnEars_uIRmckvU_Xak0ZS-LQTpcNO-Z6efHm5gakH2AXrGSjlltZyU09GGNJ0KOGY9wQIwIndgwW1Nb687XMa3XYdeaSb7_nzOlvRGA6tPz-r4NWKtObbps96AYWw44Bj3YHWAs-_Q0AAP__.pY-WL020R1_Gu3yAgbGQek1wxQIoqx9chRuK8NZeR8g    


&{HEADERS}    
...    Content-Type=application/json
...    fusetoken=${FUSETOKEN}





*** Variables ***
${URL}    https://boss-pre.fuse.co.id/#/login
${BROWSER}    chrome
${USERNAME}    ceo001
${PASSWORD}    Password2024!@1218
${SLIDER}    xpath://*[@id="app"]/div/div[2]/form/div[2]/div[4]/div/div/div/i
${LOGIN_BUTTON}    xpath://button[contains(text(), 'Login')]

${DB_HOST}    db-postgresql-non-production-do-user-1574697-0.b.db.ondigitalocean.com
${DB_USER}    doadmin
${DB_PASSWORD}    asCeJss6WgYnLUsc
${DB_NAME}    sit_cekpremi
${DB_PORT}    25060

*** Test Cases ***
Valid Login Test
    [Documentation]    
    # Wait Until Element Is Visible    name=accountId    10s
    Input Text    name=accountId    ${USERNAME}
    Input Text    name=passWord    ${PASSWORD}
    Drag Slider Right Core
    Sleep    2s
    # Click Button    ${LOGIN_BUTTON}
    Wait Until Page Contains    Dashboard    timeout=10s
    Go To     https://boss-pre.fuse.co.id/#/v2/policy

    Sleep  30s
    Input Text    xpath=//input[@placeholder="Policy Number / Order No. / Insurance Slip Number / Partner Code / Insured Name / Renewal No / RFQ No"]    1899472366677917698
    Click Element    xpath=//button[i[contains(@class, 'el-icon-search')]]
    Sleep  30s

    Connect To Database    psycopg2    ${DB_NAME}    ${DB_USER}    ${DB_PASSWORD}    ${DB_HOST}    ${DB_PORT}
        ${hasil}    Query    select data_car_oms_slip_no,* from obj_data_car odc where data_car_oms_slip_no is not null  limit 10;
     FOR    ${user}    IN    @{hasil}
          Log To Console    Response: ${user}

        
    END

Send POST Request with Headers and JSON Body
    [Documentation]    Mengirim request POST dengan header fusetoken dan body JSON
    Create Session    api_session    ${BASE_URL}

    ${body}=    Create Dictionary
    ...    multiFieldQuery=1899472366677917698

    ${response}=    Post Request
    ...    api_session
    ...    ${ENDPOINT}
    ...    json=${body}
    ...    headers=${HEADERS}

    Log To Console    Response: ${response.json()}
    Should Be Equal As Numbers    ${response.status_code}    200
    # Connect To Database    psycopg2    ${DB_NAME}    ${DB_USER}    ${DB_PASSWORD}    ${DB_HOST}    ${DB_PORT}
    # Execute SQL String
    # ...    INSERT INTO json_table (json_data) VALUES (${response.json()})


    

*** Keywords ***
Drag Slider Right Core
    [Documentation]    
    Wait Until Element Is Visible    ${SLIDER}    5s
    Drag And Drop By Offset    ${SLIDER}    280    0
    Sleep    2s


# *** Settings ***

# 


# ==============================================================================
# *** Settings ***
# Library    DatabaseLibrary
# Library    JSONLibrary
# Library    OperatingSystem
# Library    Collections

# *** Variables ***
# ${DB_HOST}    db-postgresql-non-production-do-user-1574697-0.b.db.ondigitalocean.com
# ${DB_USER}    doadmin
# ${DB_PASSWORD}    asCeJss6WgYnLUsc
# ${DB_NAME}    sit_cekpremi
# ${DB_PORT}    25060

# *** Test Cases ***
# Cek Koneksi Database
#     Connect To Database    psycopg2    ${DB_NAME}    ${DB_USER}    ${DB_PASSWORD}    ${DB_HOST}    ${DB_PORT}
#     # ${hasil}    Query    SELECT * FROM login_user;
#     # #  FOR    ${user}    IN    @{hasil}
#     # #     ${id}    Set Variable    ${user}[0]
#     # #     ${name}    Set Variable    ${user}[1]
#     # #     ${name_baru}    Set Variable    ${name} (Updated)

#     # #     Log    Updating ID ${id} to Name ${name_baru}
#     # #     Execute Sql String    UPDATE users SET name='${name_baru}' WHERE id=${id};
#     # # END
#     # Log    ${hasil}
#     # Execute Sql String    UPDATE login_user SET login_user_userid='Ari TEST' WHERE login_user_id=94;
#     # buat log bentuk data json apa aja yang di action

#     # ${data}    Create Dictionary
#     # ...    id=1
#     # ...    nama=Ari
#     # ...    usia=25
#     # ...    kota=Jakarta

#     # ${json_string}    Convert To String    ${data}
#     # Create File    data.json    ${json_string}

#     # Log    JSON Data: ${json_string}
#     # =======
#     #  Ambil Data dari Database
#     ${hasil}    Query    SELECT * FROM login_user;
#     Log    Data yang diambil: ${hasil}

#     # Buat JSON Array
#     ${json_array}    Create List  # Inisialisasi list kosong

#     #  Looping Hasil Query dan Tambahkan ke JSON
#     FOR    ${row}    IN    @{hasil}
#         ${data}    Create Dictionary
#         ...    id=${row}[0]    userid=${row}[1]    status=Aktif
#         Append To List    ${json_array}    ${data}
#     END

#     # Konversi ke JSON String
#     ${json_string}    Convert To String    ${json_array}
#     Log    JSON Data: ${json_string}

#     #  Insert JSON ke Database
#     # Execute SQL String
#     # ...    INSERT INTO json_table (json_data) VALUES ('${json_string}')

#     # Log    Data JSON berhasil diinsert ke database!
#     # ===
#     Disconnect From Database


    # +++++++++++++++++++++++++++++++++++++++++++++===


