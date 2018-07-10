let primaryUser;
let secondaryUser;

// Draw current balance from database    <-- To Do
let currentBal = 0;
// Draw transaction balance from user input field    <-- To Do
let transactionBal = 10;


function increasePrimaryBalance() {
    return currentBal += transactionBal;
    // Display current bal on app   <-- To Do
    // console.log(currentBal);
}

function decreasePrimaryBalance() {
    return currentBal -= transactionBal;
    // display current bal on app <-- To Do
    // console.log(currentBal);
}

// link function to button to trigger increase
increasePrimaryBalance();
console.log(currentBal);

// link function to button to trigger decrease
decreasePrimaryBalance();
console.log(currentBal);

console.log("Hi");

