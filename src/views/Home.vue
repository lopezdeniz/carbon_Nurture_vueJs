<template>
    <section id="pricing" class="container py-5">
      <h2 class="text-center mb-5">Choose Your Plan</h2>
  
      <div class="row align-items-center">
        <!-- Small Package -->
        <div class="col-md-4">
          <div class="card h-100">
            <!-- Image -->
            <img
              src="https://images.satu.kz/185262414_w640_h640_polietilenovaya-plenka-dlya.jpg"
              class="card-img-top"
              alt="Small Package"
            />
            <div class="card-body">
              <h5 class="card-title text-center">Small Package</h5>
              <p class="card-text text-center">
                Covers X square meters. Perfect for small farms or personal use.
              </p>
              <p class="text-center price">$50</p>
              <div class="text-center">
                <router-link class="btn btn-primary" to="/products">View Details</router-link>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Medium Package (Recommended) -->
        <div class="col-md-4">
          <div class="card h-100 recommended-card">
            <!-- Image -->
            <img
              src="https://m.media-amazon.com/images/I/71onNpZe6iL._AC_UL800_QL65_.jpg"
              class="card-img-top"
              alt="Medium Package"
            />
            <div class="card-body">
              <h5 class="card-title text-center text-success">Medium Package (Recommended)</h5>
              <p class="card-text text-center">
                Covers Y square meters. Ideal for medium-sized farms looking for efficiency.
              </p>
              <p class="text-center price">$100</p>
              <div class="text-center">
                <router-link class="btn btn-success" to="/products">View Details</router-link>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Large Package -->
        <div class="col-md-4">
          <div class="card h-100">
            <!-- Image -->
            <img
              src="https://avatars.mds.yandex.net/i?id=3d766e8115cb32a15a59842f70a1b4a9_l-4135778-images-thumbs&ref=rim&n=13&w=800&h=800"
              class="card-img-top"
              alt="Large Package"
            />
            <div class="card-body">
              <h5 class="card-title text-center">Large Package</h5>
              <p class="card-text text-center">
                Covers Z square meters. Perfect for large-scale agricultural operations.
              </p>
              <p class="text-center price">$150</p>
              <div class="text-center">
                <router-link class="btn btn-primary" to="/products">View Details</router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  export default {
    name: "PricingSection",
  };
  </script>
  
  <style scoped>
  #pricing {
    background-color: #f8f9fa; /* Same as the main page */
    padding: 3rem 0;
  }
  
  .card {
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Animation */
  }
  
  .card:hover {
    transform: translateY(-5px); /* Lift on hover */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Stronger shadow */
  }
  
  .card-img-top {
    height: 200px;
    object-fit: cover; /* Ensure the image fits well */
    border-bottom: 1px solid #dee2e6; /* Separate image from body */
  }
  
  .recommended-card {
    transform: translateY(-17px); /* Lift the recommended card */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Stronger shadow */
    background-color: #e9f7ef; /* Light green background */
    border: 2px solid #28a745; /* Green border for emphasis */
  }
  
  .card-title {
    font-size: 1.25rem;
    margin-bottom: 1rem;
  }
  
  .card-text {
    font-size: 1rem;
    color: #6c757d;
  }
  
  .price {
    font-size: 1.5rem;
    font-weight: bold;
    color: #343a40;
  }
  
  .text-success {
    font-weight: bold;
  }
  
  #pricing h2 {
    font-size: 2rem;
    color: #343a40;
    margin-bottom: 2rem;
    font-weight: bold;
  }

  #pricing {
  background-color: #ffffff; /* Устанавливаем белый фон */
  padding: 3rem 0;
}

  </style>
  