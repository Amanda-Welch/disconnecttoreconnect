<footer>
  <div class="container-fluid footer" style="background-color:#f2f2f2;padding:5%;" id="contactForm">

    <div class="row">
      <div class="col">
        <h3 class="text-center">For questions or suggestions Contact Me</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-lg">
        <form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate>
          <div class="form-group">
            <label for="inputName">Name:</label>
            <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Enter name" required>
            <div class="invalid-feedback">
              Please enter your name.
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail">Email:</label>
            <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Enter email" required>
            <div class="invalid-feedback">
              Please enter your email.
            </div>
          </div>
          <div class="form-group">
            <label for="inputSubject">Subject:</label>
            <select class="form-control" id="inputSubject" name="inputSubject">
              <option value="Questions">Questions</option>
              <option value="Appointment">Appointment</option>
              <option value="Retreats">Retreats</option>
              <option value="Events">Events</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputMessage">Message:</label>
            <textarea class="form-control" id="inputMessage" name="inputMessage" rows="5" placeholder="Tell me something..." required></textarea>
            <div class="invalid-feedback">
              Please enter your message.
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-primary" onclick="sendMail();return false;">Send Message</button>
        </form>

        <br>
        <h4>Brooke Benincosa</h4>
        <h4 id="emailsize">disconnecttoreconnect@hotmail.com</h4>
        <div style="margin-top:10px;">
          <a href="https://facebook.com/mindbodybrows"><i class="fab fa-facebook"></i></a>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <a href="https://instagram.com/brookebenincosa"><i class="fab fa-instagram"></i></a>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <a href="https://www.paypal.me/BrookeBenincosa"> <i class="fab fa-paypal fa-2x"></i> </a>
        </div>

        <script>
          function sendMail() {
            var form = document.getElementById('form');
            if (form.checkValidity() === false) {
              form.classList.add('was-validated');
              return;
            }

            var name = document.getElementById("inputName").value;
            var email = document.getElementById("inputEmail").value;
            var subject = document.getElementById("inputSubject").value;
            var message = document.getElementById("inputMessage").value;

            var emailBody = "From: " + name + "\n\nEmail: " + email + "\n\nSubject: " + subject + "\n\nMessage: \n" + message;
            emailBody = encodeURIComponent(emailBody);

            window.location.href = "mailto:disconnecttoreconnect@hotmail.com?Subject=" + subject + "&body=" + emailBody;
          }
        </script>

      </div>

      <div class="col-lg">
        <iframe src="https://outlook.live.com/owa/calendar/00000000-0000-0000-0000-000000000000/f6d24925-3d81-4c06-8c88-168737339c1b/cid-327B3E6262349724/index.html" scrolling="yes" frameborder="0" onload="this.style.display='block';"></iframe>
      </div>

    </div>

  </div>
</footer>