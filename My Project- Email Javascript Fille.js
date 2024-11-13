// Define the Google Sheet where data will be added
const sheetName = "Subscribers"; // Change to match your sheet name
const sheet = SpreadsheetApp.getActiveSpreadsheet().getSheetByName(sheetName);

// Create a function to handle form submissions
function doPost(e) {
  // Get data from the form submission
  const email = e.parameter.email;
  const timestamp = new Date();

  // Add data to the sheet
  sheet.appendRow([email, timestamp]);

  // Send a success message back to the form submitter
  return ContentService.createTextOutput("Subscription successful!");
}
