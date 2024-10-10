<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create VCard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-image: linear-gradient(to bottom, #c9bec0, #968073); /* Gradien warna yang keren */
      background-repeat: no-repeat;
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      font-family: 'Poppins', sans-serif;
    }

    .scrollable-container {
      max-height: 90vh;
      width: 100%;
      padding: 20px;
      overflow-y: auto;
      box-sizing: border-box;
    }

    .container {
      max-width: 500px;
      margin: 20px auto;
      padding: 30px;
      background-color: rgba(255, 255, 255, 0.95); /* Latar belakang sedikit lebih transparan */
      border-radius: 15px;
      border: none;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      animation: fadeIn 1s ease-in-out;
      position: relative;
      z-index: 2;
    }

    h2 {
      text-align: center;
      color: #5a504f;
      margin-bottom: 30px;
      font-size: 28px;
      font-weight: bold;
      animation: slideDown 1s ease-in-out;
    }

    .form-group {
      margin-bottom: 25px;
    }

    label {
      font-size: 14px;
      color: #666;
      font-weight: 500;
      margin-bottom: 10px;
      display: block;
    }

    input[type="text"], input[type="email"], input[type="file"] {
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 50px;
      width: 100%;
      box-sizing: border-box;
      font-size: 16px;
      background-color: #f9f9f9;
      transition: all 0.3s ease;
    }

    input[type="text"]:focus, input[type="email"]:focus, input[type="file"]:focus {
      border-color: #6a5c5b;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(255, 111, 97, 0.2);
    }

    button[type="submit"] {
      background-color: #938483;
      color: #fff;
      padding: 15px 25px;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      font-size: 18px;
      font-weight: bold;
      width: 100%;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(134, 128, 128, 0.4);
    }

    button[type="submit"]:hover {
      background-color: #534647;
      box-shadow: 0 6px 20px rgba(126, 118, 118, 0.5);
    }

    button[type="submit"]:focus {
      outline: none;
      box-shadow: 0 0 10px rgba(89, 79, 78, 0.6);
    }

    .back-button {
      background-color: #6c757d;
      color: #fff;
      padding: 10px 20px;
      border-radius: 30px;
      text-decoration: none;
      font-size: 16px;
      display: block;
      text-align: center;
      width: 100%;
      box-shadow: 0 4px 12px #e0a800(0, 0, 0, 0.1);
      transition: background-color 0.3s ease-in-out;
    }

    .back-button:hover {
      background-color: #e0a800;
    }

    .bottom-container {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideDown {
      from {
        opacity: 0;
        transform: translateY(-50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <div class="scrollable-container">
    <div class="container">
      <h2>Create Your VCard</h2>
      <form action="/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="position">Position</label>
          <input type="text" name="position" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="photo">Photo</label>
          <input type="file" name="photo" accept="image/*" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create VCard</button>
      </form>

      <!-- Tombol Kembali -->
      <div class="bottom-container">
        <a href="/dashboard" class="back-button">Kembali</a>
      </div>
    </div>
  </div>
</body>
</html>
