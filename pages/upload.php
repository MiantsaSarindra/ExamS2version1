<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Photo de profil</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #0d0d0d;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .upload-container {
      background-color: #1c1c1c;
      padding: 40px;
      border-radius: 12px;
      width: 100%;
      max-width: 500px;
      box-shadow: 0 0 15px rgba(0, 255, 255, 0.1);
    }

    .upload-container h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #00ffff;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      color: #ccc;
    }

    .form-group input[type="text"],
    .form-group textarea,
    .form-group input[type="file"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #444;
      border-radius: 6px;
      background-color: #2a2a2a;
      color: white;
      font-size: 15px;
    }

    .form-group input[type="file"] {
      padding: 6px;
    }

    .form-group textarea {
      resize: vertical;
      height: 80px;
    }

    .btn-upload {
      width: 100%;
      padding: 12px;
      background-color: #00ffff;
      color: black;
      font-weight: bold;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-upload:hover {
      background-color: #00cccc;
    }

    .back-link {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
    }

    .back-link a {
      color: #00ffff;
      text-decoration: none;
    }

    .back-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="upload-container">
    <h2>Ajouter une photo de profil</h2>
    <form action="traitement_upload.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="media">Choisir une photo</label>
        <input type="file" id="media" name="media" accept="image/*,video/*" required>
      </div>
      <button type="submit" class="btn-upload">Ajouter</button>
    </form>
    <div class="back-link">
      <a href="home.html">⬅ Retour </a>
    </div>
  </div>

</body>
</html>