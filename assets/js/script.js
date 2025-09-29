
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

