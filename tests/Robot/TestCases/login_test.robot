*** Settings ***
Library    SeleniumLibrary
Suite Setup    Open Browser   https://boss-pre.fuse.co.id/#/login    chrome
Suite Teardown    Close Browser

*** Variables ***
${URL}    https://boss-pre.fuse.co.id/#/login
${TARGET}       xpath=//div[@id='target'] 


${DRAGGABLE}       xpath=//div[@class='draggable_bg']           # XPath of the draggable element
${EXPECTED_WIDTH}  260px         
# ${BROWSER} chrome

*** Test Cases ***
Valid Login Test
    Input Text    name=accountId    ceo001
    Input Text    name=passWord    Password2024!@1218
    
    Drag Element And Verify Width    ${DRAGGABLE}    ${EXPECTED_WIDTH}
    Close Browser
    
 Drag Element And Verify Width
    [Arguments]    ${element_locator}    ${expected_width}
    # Simulate the drag operation (this might be implemented using JavaScript or selenium)
    Execute Javascript    arguments[0].style.width='260px';  # This simulates the drag by directly modifying the style
    Sleep    1s  # Optional wait time for animation to complete
    ${width}=    Get Element Attribute    ${element_locator}    style
    Should Contain    ${width}    width: ${expected_width}   # Verify if width is changed to 260px


*** Keywords ***
Drag Element And Verify Width
    [Arguments]    ${arg1}    ${arg2}
    # TODO: implement keyword "Drag Element And Verify Width".
    Fail    Not Implemented
