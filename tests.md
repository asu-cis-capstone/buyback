# Buyback Boss Testing Plan

###Overview of Testing Plan
Our team plans to utilize 3 different testing mechanisms to analyze the effectiveness of basic site design and referral program.  The three sources we plan to use are:
   * Real user testing 
   * Usability Hub
   * Selenium Automated Testing
 
Our team and client have come up with the following useful test cases: 

**Test cases:**
  1. User navigates to BuybackBoss.com to sell his 16GB iPhone 5 on Verizon. The user wants to be paid by check and does not have a box to send his phone in.
  2. User navigates to BuybackBoss.com to sell device of choice and wants to share referral code to friends via Twitter.
  3. User navigates to BuyBackBoss.com to sell device of choice and uses made up referral code.
  4. User navigates to BuyBackBoss.com to sell device of choice and inputs name that contains numbers.
  5. User navigates to BuyBackBoss.com to sell their 8GB Verizon iPhone 4. The user attempts to enter their own referral code to receive an extra $10.
  6. A previous user navigates to BuyBackBoss.com to sell their Unlocked 32GB iPhone 5C. When filling in their information, they enter it all the same as before, but enter in a new phone number.
  7. User tries to sell a Verizon iPhone 5 32GB and as he/she is filling out information realizes it’s a 16GB and has to go back to change the size of the iPhone
  8. User sells device of their choice and tries to put in a referral code but caps lock is on.
  9. User selects correct phone information and is entering personal information when they enter incorrect email format.
  10. User selcts 8gb and Verizon, when carrier is actaully T-Mobile. Mistake is not realized during process.
  

**Interpretation of Results:**
  * The one test that fails is TestTwo. This is because it is difficult to return to Buyback Boss after they post to social media. We can make the social media post open in a new tab to fix this issue. 
  * When a user selects a invalid option for a certain phone, we need to have validation so they can not continue to the next step until they make a valid choice. 
  * There also needs to be a way to go back in the process so the user has an easier time fixing a mistake he/she had made about their real phone information. Right now, if a user tries to go back and change information they will have to click on the home button and start from scratch. 
