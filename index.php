<!DOCTYPE html>
<html>
<head>
  <title>Comment Form</title>


  <style>
    /* styles.css */
body {
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #f7f9fa;
    margin: 0;
    padding: 0;
  }
  
  .container {
    max-width: 500px;
    margin: 40px auto;
    background: #fff;
    border-radius: 10px;
    /* Add a border for the page */
    border: 2px solid #4a90e2;  /* You can change the color as you like */
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    padding: 32px 24px 24px 24px;
  }
  
  h1 {
    color: #2d3a4b;
    margin-bottom: 24px;
    font-size: 2rem;
    text-align: center;
  }
  
  form {
    display: flex;
    flex-direction: column;
    gap: 12px;
  }
  
  input[type="text"] {
    padding: 10px;
    border: 1px solid #bfc9d1;
    border-radius: 5px;
    font-size: 1rem;
    transition: border 0.2s;
  }
  
  input[type="text"]:focus {
    border-color: #4a90e2;
    outline: none;
  }
  
  button {
    padding: 10px;
    background: #4a90e2;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background 0.2s;
  }
  
  button:hover {
    background: #357ab8;
  }
  
  .comment-box {
    margin-top: 28px;
    border: 1px solid #e1e4e8;
    background: #f5f7fa;
    border-radius: 6px;
    padding: 16px;
    min-height: 40px;
    color: #333;
    font-size: 1.05rem;
  }
  </style>

  
</head>
<body>
  <div class="container">
    <h1>Comment Form</h1>
    <form method="GET">
      <input type="text" name="comment" placeholder="Enter your comment">
      <button type="submit">Submit</button>
    </form>
    <div class="comment-box">
      <?php
        if (isset($_GET['comment'])) {
          // VULNERABLE: Output is not sanitized!
          echo "User comment: " . $_GET['comment'];
        }
      ?>
    </div>
  </div>
</body>
</html>