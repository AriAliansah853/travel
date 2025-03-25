*** Settings ***
Library    SeleniumLibrary    screenshot=None
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
${URL}   https://dev.cekpremistage.com/uat/cekpremi/
# ${URL}   https://cashier-uat.brokerindotekno.co.id/v2/#/customer?securityCode=VRoN4nHwt2PsjbcpRGOKd2cwXT5rGe0%2BPzHDasVusMgEG%2BQ8xnyMKjkJ9NWHPgnPSsSa98RHvTi7zqN7K%2FELYH2F06d%2BIhg7dtiD9OOw0JAKrMOkv%2B1eQm61YGSbfrW2Qlx1VSM8pApWFOd%2F68CtCK%2Bj9lkSQmr1hlZBAfPoz%2FjOR%2Bmd0YCOewh8SWy0ZlGhHYi7Qtyp3X5h2bA4YmoZB%2FBZ1GLRObi2T4809%2BPyShzCmYFITAsr9gIP0XF0WBb0Kq9fom3NT6NNTcKkHh5HUCYptVPbENnY7jHv1YR%2BYwgRGoEPmGRdH%2BydEnk%2BA1XoVk0FxFBk46neUy%2Fn2BEI1Q%3D%3D&token=eyJhbGciOiJIUzI1NiIsInppcCI6IkRFRiJ9.eNpUUdmSokAQ_JUNXhnDbkCgJ2IeFDkcRkDAA8MIg6OVBjkG8MCJ-ffFY3dn660zs7qyKr-o-hhQr1SDs3JBatK4RYpz6uUObE83ZFvjPMLVNqmLvFN-bSg_DItj3kyiDfW6oXhGFJg_taFe_vKGn-G7wiZh7FfRL0l60GUpFdGDmoytrTJ35K1lm3fy3lm1PwQPuJ2T2zgIAGR52CERDknmH8ZkT5q6Y0CHkYcjKIKuBBGILBrc24sS50-7CHEBFLiH0wbn_nOR7mfA88x3tzu-lN1b4HgEAS9yCKH_7tHcTvTjHDUOjxVp_nle2IXB5dq5Yaw6CcLSVk09YsLzyh1UKga0ddXGfr041tO9rNIz8ZK3Uz1J35Gx1Kx9bjm14yPR1k4uEa6fhqD35Q9PYxTAR_Qk3gtRQ8bINM_gfahXUzM90RDPMh56qhPsqiUzO1zgwpmK5bBcKmbU50WpkXQ6QYfUmWUVjA_r0XBnFdd-Ytp0FgFPMvE5Fp1lC9YHNdY8IsyatmRXg5gJhpyXFetRf7SG6odtBoRxOREg2mqd-CplnjJxh3WF9hMLrBSwHAVA_0S7ImMNlzcMN9RTLR5oc8krm4UVyEbuCYl2gp5Ne-e9rRaylal2pNFtJOcpPYSrYpEC5aKMUo7P8bzt58xInsDZ29uGuqVD_OaeDsM8o0ka0gUhDJAfQsD2gI-jHscC0BMFFva4IGIRt9v5nZb6_g0AAP__.7ZTe9OgwyHYfRjlQarjl7FtY4hYG9y3Lh2Dn-nep954&region=ID&language=en-US

${BROWSER}    chrome
${H1_ELEMENT}    xpath=//div[@class='rpbi-info']/h1
${DB_HOST}    localhost
${DB_NAME}    db_games
${DB_USER}    root
${DB_PASSWORD}    
${DB_PORT}    3306
${FILE}    C:/Users/ITAM1087/Pictures/Screenshots/Screenshot.png
# ${SPAN_ELEMENTS}    xpath=//div[@id='tagList']//span

*** Test Cases ***
Valid Login Test
    [Documentation]  
    Maximize Browser Window
    Sleep  3s
   
    
    Execute JavaScript    document.getElementById('burger').style.display = 'block'
    Wait Until Element Is Visible    id=burger    timeout=5s
    Click Element    id=burger
    Sleep    3s
    Wait Until Element Is Visible    id=home-login-btn    timeout=5s
    Click Element    id=home-login-btn
    Sleep    3s
    Input Text    id=hp    082111371287
    Input Password    id=password    Fate090700#
    Sleep    3s
    Click Button    id=btn-login
    Sleep    3s
    Click Element    xpath=//a[.//p[text()='Motor']]
    Sleep    3s
    Click Element    xpath=//button[@data-target='modal1']
    Sleep    3s
    Click Element    xpath=//button[.//p[text()='Honda']]
    Sleep     3s
    Click Element    xpath=//button[.//p[text()='2020']]
    Sleep    3s
    Click Element    xpath=//button[.//p[text()='ADV 150']]
    Sleep    3s
    Click Element    xpath=//button[.//p[text()='ABS']]
    Sleep    3s
    Click Element    xpath=//button[.//p[text()='B (DKI Jakarta-Depok-Tangerang-Bekasi)']]
    Sleep    3s
    Click Element    xpath=//button[.//p[text()='Pribadi']]
    Sleep    3s
    Click Element    xpath=//button[.//p[text()='Total Loss Only']]
    Sleep    3s
    Click Button    id=submit
    # Go To    https://dev.cekpremistage.com/uat/indotekno/asuransi-motor/data-form/product-summary/3d4d9831-e537-4707-9c6c-53a04494e46c/193
    # Go To    https://dev.cekpremistage.com/uat/indotekno/asuransi-motor/product-catalogue/3d4d9831-e537-4707-9c6c-53a04494e46c
    Sleep    3s
    Scroll Element Into View    xpath=//button[@data-index="4"]
    Click Button    xpath=//button[@data-index="4"]
    Sleep    3s
    Click Button    xpath=//button[@data-asuransi="105"]
    Sleep    3s
    Click Button    id=fill-now
    Sleep    3s
    Click Element    id=bulan
    Sleep    3s
    Click Button    xpath=//button[@data-bulan="Februari"]
    Sleep    3s
    Click Button    id=btn-upload-stnk
    Sleep    3s
    Choose File    xpath=//input[@type='file']     ${FILE}
    Press Keys    NONE    ESC
    Sleep    3s
    Input Text    id=kode-plat    ${{'{}{}'.format(random.randint(1000, 9999), ''.join(random.sample('ABCDEFGHIJKLMNOPQRSTUVWXYZ', 3)))}}
    Sleep    3s
    Input Text    id=nomor-rangka     ${{''.join(random.choices('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', k=16))}}
    Sleep    3s
    Input Text    id=nomor-mesin     ${{''.join(random.choices('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', k=16))}}
    Sleep    3s
    Click Button    id=btn-upload-car0
    Sleep    3s
    Choose File    id=uploadInput0     ${FILE}
    Press Keys    NONE    ESC
    Sleep    3s
    Click Button    id=btn-upload-car1
    Sleep    3s
    Choose File    id=uploadInput1     ${FILE}
    Press Keys    NONE    ESC
    Sleep    3s
    Click Button    id=btn-upload-car2
    Sleep    3s
    Choose File    id=uploadInput2     ${FILE}
    Press Keys    NONE    ESC
    Sleep    3s
    Click Button    id=btn-upload-car3
    Sleep    3s
    Choose File    id=uploadInput3     ${FILE}
    Press Keys    NONE    ESC
    Sleep    3s
    Click Button    id=btn-upload-car4
    Sleep    3s
    Choose File    id=uploadInput4     ${FILE}
    Press Keys    NONE    ESC
    Sleep    3s
    Click Button    id=submitButton
    # ----
    Sleep    3s
    Click Button    id=btn-upload-KTP
    Sleep    3s
    Choose File    id=uploadInput     ${FILE}
    Sleep    3s
    Click Button    id=btn-upload-SIM
    Sleep    3s
    Choose File    id=uploadInputSIM     ${FILE}
    Sleep    3s
    Input Text    id=Nomor-Ktp    124567898765
    Sleep    3s
    Input Text    id=Nama-Tertanggung    TEST IT ARI
    Sleep    3s
    Click Element    id=alamat
    Sleep    3s
    Select From List By Value    id=Select0    4
    Sleep    3s
    Select From List By Value    id=Select1    Kota Jakarta Barat
    Sleep    3s
    Select From List By Value    id=Select2    Cengkareng Timur
    Sleep    3s
    Input Text    id=inputAlamat1     02
    Sleep    3s
    Input Text    id=inputAlamat2     03
    Sleep    3s
    Input Text    id=inputAlamat3     TEST JALAN JALAN
    Sleep    3s
    Click Button    id=saveButton
    Sleep    3s
    Input Text    id=Nomor-HP    082111371287
    Sleep    3s
    Click Button    id=btn-data2
    Sleep    3s
    Click Element    xpath=//span[@aria-label='March 21, 2025']
    Sleep    3s
    Click Button    id=saveTgl
    Sleep    3s
    Input Text    id=email    aliansah628@gmail.com
    Sleep    3s
    Click Button    id=submitButton
    Sleep    3s
    # -----
    Scroll Element Into View    xpath=//input[@id='skCheckbox']
    Sleep    3s
    Scroll Element Into View    id=skCheckbox
    Execute JavaScript    document.getElementById('skCheckbox').click();
    Sleep    3s
    Click Button    id=submitButton
    Sleep    20s
     Click Element    xpath=//span[text()='See All']
    Sleep    3s
    Click Element    (//span[@class="fu-check-icon"])[7]
    Sleep    3s
    Click Element    xpath=//button[contains(@class, 'van-button') and contains(@class, 'van-button--default') and contains(@class, 'van-button--normal')]
    Sleep    3s
    Click Element    (//span[@class="fu-check-icon"])[1]
    Sleep    3s
    Click Element    xpath=//button[contains(@class, 'van-button') and contains(@class, 'van-button--default') and contains(@class, 'van-button--normal')]
    Sleep    3s
    Click Element    xpath=(//button[contains(@class, 'van-button') and contains(@class, 'van-button--default') and contains(@class, 'van-button--normal') and contains(@class, 'van-button--block') and contains(@class, 'fu-btn') and contains(@class, 'large') and contains(@class, 'danger')])[1]
    Sleep    20s
    
    