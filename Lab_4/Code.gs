const SHEETS_URL = 'https://docs.google.com/spreadsheets/d/1fNfud1je_jPrTyt1Et1-wTjSWepw8H9jSUY7FSVhoE0/edit#gid=0';
const SHEET_NAME = 'Лист1';

function doPost(e) {
  const sheets = SpreadsheetApp.openByUrl(SHEETS_URL);
  const sheet = sheets.getSheetByName(SHEET_NAME);
  const { title, email, category, description } = e.parameter;

  if (title && email && category && description) {
    sheet.appendRow([category, title, description, email]);
    return ContentService.createTextOutput(JSON.stringify({ status: 'success' })).setMimeType(ContentService.MimeType.JSON);
  } else {
    return ContentService.createTextOutput(JSON.stringify({ status: 'error', message: 'Missing parameters' })).setMimeType(ContentService.MimeType.JSON);
  }
}
