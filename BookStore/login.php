<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <form id="loginForm" class="w-full max-w-md p-8 space-y-4 bg-white rounded-xl shadow-md">
    <h2 class="text-xl font-semibold text-center mb-4">Login</h2>
    <div>
      <label class="block">Email</label>
      <input type="email" name="email" required class="w-full border p-2 rounded" />
    </div>
    <div>
      <label class="block">Password</label>
      <input type="password" name="password" required class="w-full border p-2 rounded" />
    </div>
    <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Login</button>
    <!-- Add this inside <body> after the login form -->
    <p class="text-center mt-4 text-sm">
      Don't have an account?
      <a href="register.php" class="text-blue-600 hover:underline">Register here</a>
    </p>

  </form>

  <script>
    const loginForm = document.getElementById("loginForm");

    loginForm.addEventListener("submit", async function (e) {
      e.preventDefault();

      const formData = new FormData(loginForm);
      const data = {
        email: formData.get("email"),
        password: formData.get("password"),
      };

      try {
        const res = await fetch("/api/login", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(data),
        });

        if (res.ok) {
          // Redirect after successful login
          window.location.href = "html.html";
        } else {
          const error = await res.json();
          alert(error.message || "Login failed.");
        }
      } catch (err) {
        alert("Something went wrong!");
        console.error(err);
      }
    });
  </script>
</body>
</html>
