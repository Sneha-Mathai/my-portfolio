<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sneha Mathai | Portfolio</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="navbar">
  <div class="logo">Sneha Mathai</div>
  <nav>
    <a href="#about">About</a>
    <a href="#skills">Skills</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
  </nav>
</header>

<section id="hero">
  <h1>Hi, I'm Sneha Mathai</h1>
  <p>Support Engineer transitioning into Development | PHP · JavaScript · SQL</p>
  <a href="#contact" class="btn">Get in touch</a>
</section>

<section id="about">
  <h2>About Me</h2>
  <p>
    I have 2 years of experience as a Support Engineer at a construction-industry
    product company, working closely with PHP, JavaScript, and SQL. I'm currently
    building my development skills further and actively applying for roles in
    development and support. I learn something new every day and I'm looking for
    a full-time, non-shift opportunity where I can grow as a developer.
  </p>
</section>

<section id="skills">
  <h2>Skills</h2>
  <ul class="skills-list">
    <li>PHP</li>
    <li>JavaScript</li>
    <li>SQL</li>
    <li>HTML / CSS</li>
    <li>Debugging & Application Support</li>
    <li>Git & GitHub</li>
  </ul>
</section>

<section id="projects">
  <h2>Projects</h2>
  <div class="project-grid">
    <div class="project-card">
      <h3>Project One</h3>
      <p>Short description of what this project does and what you used to build it.</p>
    </div>
    <div class="project-card">
      <h3>Project Two</h3>
      <p>Short description of what this project does and what you used to build it.</p>
    </div>
    <div class="project-card">
      <h3>Project Three</h3>
      <p>Short description of what this project does and what you used to build it.</p>
    </div>
  </div>
</section>

<section id="contact">
  <h2>Contact Me</h2>

  <?php
    // Show a success or error message after form submission
    if (isset($_GET['status'])) {
      if ($_GET['status'] === 'success') {
        echo '<p class="form-message success">Thanks! Your message has been sent.</p>';
      } elseif ($_GET['status'] === 'error') {
        echo '<p class="form-message error">Something went wrong. Please try again.</p>';
      }
    }
  ?>

  <form action="php/contact.php" method="POST" class="contact-form">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <button type="submit">Send Message</button>
  </form>
</section>

<footer>
  <p>&copy; <?php echo date("Y"); ?> Sneha Mathai. All rights reserved.</p>
</footer>

</body>
</html>
