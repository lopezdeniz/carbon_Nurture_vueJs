<template>
  <header>
    <nav class="navbar navbar-expand-lg" style="background-color: #00BFB2;"> <!-- Header Color -->
      <div class="container">
        <!-- Logo -->
        <a class="navbar-brand text-uppercase" href="#">Carbon Nurture</a>
        <!-- Toggle Button for Mobile -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Technology</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <!-- CTA Button -->
          <a href="#" class="btn btn-primary">Purchase Now</a>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
export default {
  name: "PageHeader",
};
</script>

<style scoped>
/* Logo Styles */
.navbar-brand {
  font-size: 1.5rem;
  font-weight: bold;
  color: #000000; /* Logo Color */
}
.navbar-brand:hover {
  color: #f8f9fa; /* Lighter Shade on Hover */
}

/* Navigation Link Styles */
.nav-link {
  color: #000000; /* Link Color */
  font-weight: 500;
  transition: color 0.3s ease;
}
.nav-link:hover {
  color: #0B6E4F; /* Hover Color */
}

/* Button Styles */
.btn-primary {
  background-color: #0B75CD; /* Custom Button Color */
  border: none;
  font-weight: bold;
  padding: 0.5rem 1rem;
}
.btn-primary:hover {
  background-color: #0056b3; /* Darker Shade on Hover */
}
</style>
