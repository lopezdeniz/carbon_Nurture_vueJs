<template>
    <footer class="footer-03">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
  <div class="col-md-3 mb-md-0 mb-4">
    <h2 class="footer-heading">Shop</h2>
    <ul class="list-unstyled">
      <li><a href="/shop" class="py-1 d-block">Products</a></li>
      <li><a href="/shop" class="py-1 d-block">Categories</a></li>
      <li><a href="/shop" class="py-1 d-block">Special Offers</a></li>
    </ul>
  </div>
  <div class="col-md-3 mb-md-0 mb-4">
    <h2 class="footer-heading">About</h2>
    <ul class="list-unstyled">
      <li><a href="/about" class="py-1 d-block">Our Story</a></li>
      <li><a href="/about" class="py-1 d-block">Team</a></li>
      <li><a href="/about" class="py-1 d-block">Careers</a></li>
    </ul>
  </div>
  <div class="col-md-3 mb-md-0 mb-4">
    <h2 class="footer-heading">Legal</h2>
    <ul class="list-unstyled">
      <li><a href="/legal" class="py-1 d-block">Terms & Conditions</a></li>
      <li><a href="/legal" class="py-1 d-block">Privacy Policy</a></li>
      <li><a href="/legal" class="py-1 d-block">Refund Policy</a></li>
    </ul>
  </div>
  <div class="col-md-3 mb-md-0 mb-4">
    <h2 class="footer-heading">FAQ</h2>
    <ul class="list-unstyled">
      <li><a href="/faq" class="py-1 d-block">General Questions</a></li>
      <li><a href="/faq" class="py-1 d-block">Shipping Info</a></li>
      <li><a href="/faq" class="py-1 d-block">Support</a></li>
    </ul>
  </div>
</div>

          </div>
          <div class="col-md-6">
            <div class="row justify-content-end">
              <div class="col-md-12 col-lg-11 mb-md-0 mb-4">
                <h2 class="footer-heading">Follow Us</h2>
                <ul class="ftco-footer-social p-0">
                  <li class="ftco-animate">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter">
                      <ion-icon name="logo-twitter" class="social-icon"></ion-icon>
                    </a>
                  </li>
                  <li class="ftco-animate">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook">
                      <ion-icon name="logo-facebook" class="social-icon"></ion-icon>
                    </a>
                  </li>
                  <li class="ftco-animate">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram">
                      <ion-icon name="logo-instagram" class="social-icon"></ion-icon>
                    </a>
                  </li>
                  <li class="ftco-animate">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="LinkedIn">
                      <ion-icon name="logo-linkedin" class="social-icon"></ion-icon>
                    </a>
                  </li>
                </ul>
                <h2 class="footer-heading mt-5">Subscribe Us</h2>
                <form @submit.prevent="submitSubscription" class="subscribe-form">
                  <div class="form-group d-flex">
                    <input
                      v-model="formData.email"
                      type="email"
                      class="form-control rounded-left"
                      placeholder="Enter email address"
                      required
                    />
                    <input type="submit" value="Subscribe" class="form-control submit px-3 rounded-right" />
                  </div>
                </form>
                <div v-if="responseMessage" :class="{ 'text-success': isSuccess, 'text-danger': !isSuccess }" class="mt-3">
                  {{ responseMessage }}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5 pt-4 border-top justify-content-center text-center">
          <div class="col-12">
            <p class="mb-2">
              Copyright &copy; {{ currentYear }} All rights reserved
            </p>
            <p class="mb-2">
              Created by <a href="https://github.com/lopezdeniz" target="_blank">LopezDeniz</a>
            </p>
            <p class="mb-2">
              <strong>Carbon Nurture</strong>
            </p>
            <p class="mb-0">
              <a href="#" class="mr-3">Terms &amp; Conditions</a>
              <a href="#">Privacy</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
  </template>
  
  <script>
  export default {
    name: "AppFooter",
    data() {
      return {
        currentYear: new Date().getFullYear(),
        formData: {
          email: "",
          formType: "subscription",
        },
        responseMessage: "",
        isSuccess: false,
      };
    },
    methods: {
      async submitSubscription() {
        try {
          const response = await fetch("http://localhost:8081/form-handler.php", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify(this.formData),
          });
  
          const result = await response.json();
  
          if (result.success) {
            this.responseMessage = "Subscription successful!";
            this.isSuccess = true;
            this.formData.email = ""; // Reset email field
          } else {
            this.responseMessage = result.error || "Error occurred while subscribing.";
            this.isSuccess = false;
          }
        } catch (error) {
          this.responseMessage = "Failed to connect to the server.";
          this.isSuccess = false;
          console.error(error);
        }
      },
    },
  };
  </script>
  
  <style scoped>
  .footer-03 {
    background: #f8f9fa;
    padding: 4rem 0;
  }
  .footer-heading {
    font-size: 1.5rem;
    margin-bottom: 1rem;
  }
  .list-unstyled {
    padding-left: 0;
    list-style: none;
  }
  .list-unstyled li a {
    color: #343a40;
    text-decoration: none;
  }
  .list-unstyled li a:hover {
    text-decoration: underline;
  }
  .ftco-footer-social {
    list-style: none;
    padding: 0;
    display: flex;
  }
  .ftco-footer-social li {
    margin-right: 15px;
  }
  .ftco-footer-social li a {
    display: inline-block;
    transition: transform 0.2s, color 0.2s;
  }
  .ftco-footer-social li a:hover {
    color: #007bff;
    transform: scale(1.2);
  }
  .social-icon {
    font-size: 2rem;
    color: #343a40;
  }
  .social-icon:hover {
    color: #007bff;
  }
  .subscribe-form .form-control {
    border: 1px solid #ced4da;
  }
  .subscribe-form .form-control.submit {
    background: #0B75CD;
    color: #fff;
    border: none;
  }
  .subscribe-form .form-control.submit:hover {
    background: #64b1ef;
  }
  .text-success {
    color: #28a745;
  }
  .text-danger {
    color: #dc3545;
  }
  .border-top {
    border-top: 1px solid #dee2e6 !important;
  }
  </style>
  