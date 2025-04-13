<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <form id="registerForm" class="w-full max-w-md p-8 space-y-4 bg-white rounded-xl shadow-md">
    <h2 class="text-xl font-semibold text-center mb-4">Register</h2>
    <div><label class="block">Username</label><input type="text" name="username" required class="w-full border p-2 rounded" /></div>
    <div><label class="block">Email</label><input type="email" name="email" required class="w-full border p-2 rounded" /></div>
    <div><label class="block">Password</label><input type="password" name="password" required class="w-full border p-2 rounded" /></div>
    <div><label class="block">Confirm Password</label><input type="password" name="confirmPassword" required class="w-full border p-2 rounded" /></div>
    <div><label class="block">First Name</label><input type="text" name="firstName" required class="w-full border p-2 rounded" /></div>
    <div><label class="block">Last Name</label><input type="text" name="lastName" required class="w-full border p-2 rounded" /></div>
    <button type="submit" class="w-full bg-green-600 text-white p-2 rounded hover:bg-green-700">Register</button>
    <p class="text-center text-sm text-gray-600">
      Already registered? <a href="login.php" class="text-blue-600 hover:underline">Login here</a>
    </p>
  </form>

  <script>
    const registerForm = document.getElementById("registerForm");

    registerForm.addEventListener("submit", async function (e) {
      e.preventDefault();

      const formData = new FormData(registerForm);
      const data = {
        username: formData.get("username"),
        email: formData.get("email"),
        password: formData.get("password"),
        confirmPassword: formData.get("confirmPassword"),
        firstName: formData.get("firstName"),
        lastName: formData.get("lastName"),
      };

      if (data.password !== data.confirmPassword) {
        alert("Passwords do not match.");
        return;
      }

      try {
        const res = await fetch("/api/register", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(data),
        });

        if (res.ok) {
          alert("Registration successful! Redirecting to login...");
          window.location.href = "login.html";
        } else {
          const error = await res.json();
          alert(error.message || "Registration failed.");
        }
      } catch (err) {
        alert("Something went wrong!");
        console.error(err);
      }
    });
  </script>
</body>
</html>
