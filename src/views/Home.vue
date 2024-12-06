<template>
    <section id="pricing" class="container py-5">
      <h2 class="text-center mb-5">Choose Your Plan</h2>
  
      <div class="row align-items-center">
        <div
          v-for="(packageData, index) in packages"
          :key="index"
          class="col-md-4"
          data-aos="fade-up"
          :data-aos-delay="100 * index"
        >
          <div
            class="card h-100 position-relative shadow-hover"
            :class="{ 'recommended-card': packageData.recommended }"
          >
            <!-- Dynamic Glow -->
            <div class="glow"></div>
            <!-- Image -->
            <img
              :src="packageData.image"
              class="card-img-top rounded-top"
              :alt="packageData.title"
            />
            <div class="card-body">
              <h5
                :class="['card-title', 'text-center', packageData.recommended ? 'text-success' : '']"
              >
                {{ packageData.title }}
              </h5>
              <p class="card-text text-center">{{ packageData.description }}</p>
              <p class="text-center price">{{ packageData.price }}</p>
              <div class="text-center">
                <router-link class="btn btn-primary btn-glow" to="/products">
                  View Details
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  import AOS from "aos";
  
  export default {
    name: "PricingSection",
    data() {
      return {
        packages: [
          {
            title: "Small Package",
            description: "Covers X square meters. Perfect for small farms or personal use.",
            price: "$50",
            image: "https://images.satu.kz/185262414_w640_h640_polietilenovaya-plenka-dlya.jpg",
            recommended: false,
          },
          {
            title: "Medium Package (Recommended)",
            description: "Covers Y square meters. Ideal for medium-sized farms looking for efficiency.",
            price: "$100",
            image: "https://m.media-amazon.com/images/I/71onNpZe6iL._AC_UL800_QL65_.jpg",
            recommended: true,
          },
          {
            title: "Large Package",
            description: "Covers Z square meters. Perfect for large-scale agricultural operations.",
            price: "$150",
            image: "https://avatars.mds.yandex.net/i?id=3d766e8115cb32a15a59842f70a1b4a9_l-4135778-images-thumbs&ref=rim&n=13&w=800&h=800",
            recommended: false,
          },
        ],
      };
    },
    mounted() {
      AOS.init({
        duration: 800,
        easing: "ease-in-out",
        once: true,
      });
    },
  };
  </script>
  
  <style scoped>
  #pricing {
    background-color: #ffffff;
    padding: 3rem 0;
  }
  
  /* Card Styling */
  .card {
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: linear-gradient(135deg, #f8f9fa, #ffffff);
  }
  
  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
  }
  
  /* Glow Effect */
  .glow {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0) 70%);
    opacity: 0.7;
    pointer-events: none;
    z-index: -1;
    transition: opacity 0.3s ease-in-out;
  }
  
  .card:hover .glow {
    opacity: 1;
  }
  
  /* Button */
  .btn-glow {
    position: relative;
    overflow: hidden;
    z-index: 1;
  }
  
  .btn-glow::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    background: rgba(255, 255, 255, 0.2);
    transition: width 0.3s ease-in-out;
    z-index: 0;
  }
  
  .btn-glow:hover::after {
    width: 100%;
  }
  
  /* Recommended Card */
  .recommended-card {
    transform: translateY(-17px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    background-color: #e9f7ef;
    border: 2px solid #28a745;
  }
  
  .card-img-top {
    height: 200px;
    object-fit: cover;
    border-bottom: 1px solid #dee2e6;
  }
  
  /* Typography */
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
  
  #pricing h2 {
    font-size: 2rem;
    color: #343a40;
    margin-bottom: 2rem;
    font-weight: bold;
  }
  </style>
  