const form=document.querySelector("form");
const fullName=document.getElementById("name");
const email=document.getElementById("email");
const phone=document.getElementById("phone");
const subject=document.getElementById("subject")
const message=document.getElementById("message");

function sendEmail(){
  const bodyMessage=`Full Name: ${fullName.value}<br> Email: ${email.value}<br>
  Phone Number: ${phone.value}<br> Message: ${message.value}`;
    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "rakshithace0@gmail.com",
        Password : "D1EC32986899903A28ABFDB005EDB8C52B71",
        To : 'rakshithace123@gmail.com',
        From : "rakshithace123@gmail.com",
        Subject : subject.value,
        Body : bodyMessage
    }).then(
      message => alert("Message Sent Successfully!")
    );
}

form.addEventListener("submit",(e)=>{
  e.preventDefault();
  sendEmail();
});