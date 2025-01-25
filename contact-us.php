<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conatct | Ashuraj Srivastav</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
<style>
    /* Section Styles */
    #contact {
        padding: 60px 20px;
        /* background: #212224; */
        color: #fff;
        text-align: center;
        display: flex;
        gap: 42px;
    }

    #contact > div {
        width: 44%;
    }

    #contact h2 {
      font-size: 3rem;
      margin-bottom: 10px;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: #4285f4;
    }

    #contact p {
      font-size: 1.2rem;
      margin-bottom: 40px;
      color: #b1b1b1;
    }

    /* Form Styles */
    form {
      max-width: 700px;
      margin: auto;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    form input,
    form textarea {
      width: 100%;
      padding: 15px;
      font-size: 1rem;
      border: none;
      border-radius: 5px;
      background-color: #f0f0f0;
      color: #333;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    form input:focus,
    form textarea:focus {
      outline: none;
      transform: scale(1.02);
      box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
    }

    form textarea {
      resize: none;
    }

    /* Button Styles */
    form button {
      padding: 15px;
      font-size: 1.2rem;
      color: #fff;
      background: #4285f4;
      /* border: none; */
      border-radius: 50px;
      cursor: pointer;
      transition: transform 0.3s ease, background-color 0.3s ease;
      border: 3px solid #fff;
    }

    form button:hover {
      transform: scale(1.05);
      /* background-color: #0056b3; */
      /* background-color: #ffc552; */
    }

    /* Add Some Animation */
    #contact h2,
    #contact p,
    form {
      opacity: 0;
      transform: translateY(20px);
      animation: fadeIn 1s ease-out forwards;
    }

    #contact h2 {
      animation-delay: 0.2s;
    }

    #contact p {
      animation-delay: 0.4s;
    }

    form {
      animation-delay: 0.6s;
    }

    @keyframes fadeIn {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Responsive Design */
    @media (max-width: 600px) {
      #contact h2 {
        font-size: 2.5rem;
      }

      #contact p {
        font-size: 1rem;
      }

      form button {
        font-size: 1rem;
      }
    }
</style>
<section id="contact">
    <div>
        <h2>Get in Touch</h2>
        <p>If you have any questions or opportunities, don't hesitate to reach out. I'd love to hear from you!</p>
    </div>
    <div>
        <form action="mailto:your-email@example.com" method="post" enctype="text/plain">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</section>