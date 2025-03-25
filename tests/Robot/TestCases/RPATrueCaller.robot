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
${URL}   https://www.truecaller.com/
${BROWSER}    chrome
${USERNAME}    ari.aliansah@fuse.co.id
${PASSWORD}    fate090700
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
    Wait Until Element Is Visible    xpath=//div[contains(@class, 'p-4 hidden xl:flex')]    timeout=10s
    Click Element    xpath=//div[contains(@class, 'p-4 hidden xl:flex')]
    Go To     https://accounts.google.com/o/oauth2/v2/auth?response_type=code&respone_mode=query&redirect_uri=https%3A%2F%2Fasia-south1-truecaller-web.cloudfunctions.net%2Fwebapi%2Fnoneu%2Fauth%2Fgoogle%2Fv1&state=asia-south1%7Cid%7Ctrue%7Cweb%7Chttps%3A%2F%2Fwww.truecaller.com&client_id=22378802832-klpcj5dosalhnu0vshg3hjm9qgidmp8j.apps.googleusercontent.com&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fcontacts.readonly

    Input Text    name=identifier    ${USERNAME}
    Click Element    xpath=//button[span[text()='Next']]
    Sleep  20s
    Input Text    name=Passwd    ${PASSWORD}
    Click Element    xpath=//button[span[text()='Next']]
    Sleep  20s
    Input Text    xpath=//input[@placeholder="Search phone number..."]    82111371287
    Click Element    xpath=//button[@data-cy="TcSearchBar:submit"]
    
    Wait Until Element Is Visible    xpath=//div[contains(@class, 'font-montserrat')]    timeout=10s
    ${text}    Get Text    xpath=//div[contains(@class, 'font-montserrat')]
    Log    ${text}
    Sleep  120s

    # <button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-k8QpJ VfPpkd-LgbsSe-OWXEXe-dgl2Hf nCP5yc AjY5Oe DuMIQc LQeN7 BqKGqe Jskylb TrZEUc lw1w4b" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;" data-idom-class="nCP5yc AjY5Oe DuMIQc LQeN7 BqKGqe Jskylb TrZEUc lw1w4b" jsname="LgbsSe" type="button"><div class="VfPpkd-Jh9lGc"></div><div class="VfPpkd-J1Ukfc-LhBDec"></div><div class="VfPpkd-RLmnJb"></div><span jsname="V67aGc" class="VfPpkd-vQzf8d">Next</span></button>

    # Input Text    name=passWord    ${PASSWORD}


# <input type="email" class="whsOnd zHQkBf" jsname="YPqjbf" autocomplete="username webauthn" spellcheck="false" tabindex="0" aria-label="Email or phone" name="identifier" value="" aria-disabled="false" autocapitalize="none" id="identifierId" dir="ltr" data-initial-dir="ltr" data-initial-value="">
    # Click Element    (//a[contains(@class, 'flex items-center whitespace-nowrap')])[2]
    # Wait Until Element Is Visible    xpath=//a[contains(text(), 'Google')]    timeout=10s
    # Click Element    xpath=//a[contains(text(), 'Google')]
    # Sleep  120s
    # Input Text    name=accountId    ${USERNAME}
    # Input Text    name=passWord    ${PASSWORD}
    # # Drag Slider Right Core
    # Sleep    2s
    # # Click Button    ${LOGIN_BUTTON}
    # Wait Until Page Contains    Dashboard    timeout=10s
    # Go To     https://boss-pre.fuse.co.id/#/v2/policy

    # Sleep  30s
    # Input Text    xpath=//input[@placeholder="Policy Number / Order No. / Insurance Slip Number / Partner Code / Insured Name / Renewal No / RFQ No"]    1899472366677917698
    # Click Element    xpath=//button[i[contains(@class, 'el-icon-search')]]
    # Sleep  30s

    # Connect To Database    psycopg2    ${DB_NAME}    ${DB_USER}    ${DB_PASSWORD}    ${DB_HOST}    ${DB_PORT}
    #     ${hasil}    Query    select data_car_oms_slip_no,* from obj_data_car odc where data_car_oms_slip_no is not null  limit 10;
    #  FOR    ${user}    IN    @{hasil}
    #       Log To Console    Response: ${user}

        
    # END

# Send POST Request with Headers and JSON Body
#     [Documentation]    Mengirim request POST dengan header fusetoken dan body JSON
#     Create Session    api_session    ${BASE_URL}

#     ${body}=    Create Dictionary
#     ...    multiFieldQuery=1899472366677917698

#     ${response}=    Post Request
#     ...    api_session
#     ...    ${ENDPOINT}
#     ...    json=${body}
#     ...    headers=${HEADERS}

#     Log To Console    Response: ${response.json()}
#     Should Be Equal As Numbers    ${response.status_code}    200
#     # Connect To Database    psycopg2    ${DB_NAME}    ${DB_USER}    ${DB_PASSWORD}    ${DB_HOST}    ${DB_PORT}
#     # Execute SQL String
#     # ...    INSERT INTO json_table (json_data) VALUES (${response.json()})


    

# *** Keywords ***
# Drag Slider Right Core
#     [Documentation]    
#     Wait Until Element Is Visible    ${SLIDER}    5s
#     Drag And Drop By Offset    ${SLIDER}    280    0
#     Sleep    2s


# # *** Settings ***

# # 


# # ==============================================================================
# # *** Settings ***
# # Library    DatabaseLibrary
# # Library    JSONLibrary
# # Library    OperatingSystem
# # Library    Collections

# # *** Variables ***
# # ${DB_HOST}    db-postgresql-non-production-do-user-1574697-0.b.db.ondigitalocean.com
# # ${DB_USER}    doadmin
# # ${DB_PASSWORD}    asCeJss6WgYnLUsc
# # ${DB_NAME}    sit_cekpremi
# # ${DB_PORT}    25060

# # *** Test Cases ***
# # Cek Koneksi Database
# #     Connect To Database    psycopg2    ${DB_NAME}    ${DB_USER}    ${DB_PASSWORD}    ${DB_HOST}    ${DB_PORT}
# #     # ${hasil}    Query    SELECT * FROM login_user;
# #     # #  FOR    ${user}    IN    @{hasil}
# #     # #     ${id}    Set Variable    ${user}[0]
# #     # #     ${name}    Set Variable    ${user}[1]
# #     # #     ${name_baru}    Set Variable    ${name} (Updated)

# #     # #     Log    Updating ID ${id} to Name ${name_baru}
# #     # #     Execute Sql String    UPDATE users SET name='${name_baru}' WHERE id=${id};
# #     # # END
# #     # Log    ${hasil}
# #     # Execute Sql String    UPDATE login_user SET login_user_userid='Ari TEST' WHERE login_user_id=94;
# #     # buat log bentuk data json apa aja yang di action

# #     # ${data}    Create Dictionary
# #     # ...    id=1
# #     # ...    nama=Ari
# #     # ...    usia=25
# #     # ...    kota=Jakarta

# #     # ${json_string}    Convert To String    ${data}
# #     # Create File    data.json    ${json_string}

# #     # Log    JSON Data: ${json_string}
# #     # =======
# #     #  Ambil Data dari Database
# #     ${hasil}    Query    SELECT * FROM login_user;
# #     Log    Data yang diambil: ${hasil}

# #     # Buat JSON Array
# #     ${json_array}    Create List  # Inisialisasi list kosong

# #     #  Looping Hasil Query dan Tambahkan ke JSON
# #     FOR    ${row}    IN    @{hasil}
# #         ${data}    Create Dictionary
# #         ...    id=${row}[0]    userid=${row}[1]    status=Aktif
# #         Append To List    ${json_array}    ${data}
# #     END

# #     # Konversi ke JSON String
# #     ${json_string}    Convert To String    ${json_array}
# #     Log    JSON Data: ${json_string}

# #     #  Insert JSON ke Database
# #     # Execute SQL String
# #     # ...    INSERT INTO json_table (json_data) VALUES ('${json_string}')

# #     # Log    Data JSON berhasil diinsert ke database!
# #     # ===
# #     Disconnect From Database


#     # +++++++++++++++++++++++++++++++++++++++++++++===


