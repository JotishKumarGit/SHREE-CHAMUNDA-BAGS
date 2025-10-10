
// aos animation ke liye initialization
 AOS.init();
 console.log("✅ script.js is connected!");


//  Send message on whatsapp
 function sendToWhatsApp() {
    var name = document.getElementById("name").value.trim();
    var email = document.getElementById("email").value.trim();
    var phone = document.getElementById("phone").value.trim();
    var message = document.getElementById("message").value.trim();

    var whatsappNumber = "916381280180 ";

    var url = "https://wa.me/" + whatsappNumber +
      "?text=" + encodeURIComponent(
        "📩 New Inquiry from Website\n\n" +
        "👤 Name: " + name + "\n" +
        "📧 Email: " + email + "\n" +
        "📱 Phone: " + phone + "\n" +
        "💬 Message: " + message
      );

    window.open(url, '_blank');
    return false; // Prevent form from submitting normally
  }

// Enquiry modal js go to whatsapp
 document.getElementById("enquiryForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const number = document.getElementById("number").value.trim();
    const subject = document.getElementById("subject").value.trim();
    const message = document.getElementById("message").value.trim();

    const whatsappNumber = "6381280180";

    const text = `Enquiry Form Submission:%0A
Name: ${name}%0A
Email: ${email}%0A
Phone: ${number}%0A
Subject: ${subject}%0A
Message: ${message}`;

    const url = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(text)}`;

    window.open(url, '_blank');
  });