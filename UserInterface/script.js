// An array to store the company details (simulating a database)
let companyData = [];

function saveCompanyDetails() {
  const companyName = document.getElementById("companyName").value;
  const companyAddress = document.getElementById("companyAddress").value;
  const companyEmail = document.getElementById("companyEmail").value;
  const companyPhone = document.getElementById("companyPhone").value;

 
  if (!isValidEmail(companyEmail)) {
    alert("Invalid email format. Please enter a valid email address.");
    return;
  }

 
  const companyDetails = {
    name: companyName,
    address: companyAddress,
    email: companyEmail,
    phone: companyPhone
  };
  companyData.push(companyDetails);


  const displayDetails = document.getElementById("displayDetails");
  displayDetails.innerHTML = `
    <h2>Company Details</h2>
    <p><strong>Name:</strong> ${companyName}</p>
    <p><strong>Address:</strong> ${companyAddress}</p>
    <p><strong>Email:</strong> ${companyEmail}</p>
    <p><strong>Phone:</strong> ${companyPhone}</p>
  `;

  

  alert("Company details saved successfully!");
}


function isValidEmail(email) {
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailPattern.test(email);
}
