<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Language of Flowers</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', serif;
            background-color: #F2FCE2;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            margin-bottom: 60px;
        }

        .hero h1 {
            font-size: 3rem;
            color: #2c2c2c;
            margin-bottom: 20px;
            font-weight: normal;
            letter-spacing: 1px;
        }

        .hero p {
            font-size: 1.1rem;
            color: #666;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        .decorative-line {
            width: 60px;
            height: 2px;
            background-color: #ff69b4;
            margin: 0 auto;
        }

        /* Flower Cards */
        .flower-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-bottom: 80px;
        }

        .flower-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .flower-image {
            height: 180px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .roses-bg {
            background-image: url('flowers/Screenshot 2025-06-29 at 18-41-31 Red Roses Flowers By Post.png');
        }

        .lilies-bg {
            background-image: url('flowers/shutterstock_2008819298-1024x680.jpg');
        }

        .sunflowers-bg {
            background-image: url('flowers/Sunflower_sky_backdrop.jpg');
         }
            
        .category-tag {
            position: absolute;
            top: 12px;
            left: 12px;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        .tag-love {
            background-color: #ff69b4;
            color: white;
        }

        .tag-message {
            background-color: #32cd32;
            color: white;
        }

        .tag-joy {
            background-color: #ffa500;
            color: white;
        }

        .card-content {
            padding: 20px;
        }

        .card-title {
            font-size: 1.2rem;
            color: #2c2c2c;
            margin-bottom: 12px;
            font-weight: bold;
        }

        .card-description {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.8rem;
            color: #999;
        }

        .read-more {
            display: flex;
            justify-content: center;
            background-color: white;
            color: #ff69b4;
            border: 2px solid, #ff69b4  ;
            padding: 6px 130px;
            border-radius: 4px;
            font-size: 0.8rem;
            cursor: pointer;
           
        }

        /* Newsletter Section */
        .newsletter {
            background-color: #e8f5e8;
            padding: 50px 40px;
            border-radius: 8px;
            text-align: center;
        }

        .newsletter h2 {
            font-size: 2rem;
            color: #2c2c2c;
            margin-bottom: 15px;
            font-weight: normal;
        }

        .newsletter p {
            color: #666;
            font-size: 1rem;
            margin-bottom: 30px;
        }

        .email-form {
            display: flex;
            justify-content: center;
            gap: 10px;
            max-width: 400px;
            margin: 0 auto;
        }

        .email-input {
            flex: 1;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 0.9rem;
        }

        .subscribe-btn {
            background-color: #ff69b4;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 0.9rem;
            cursor: pointer;
            text-transform: uppercase;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .flower-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .email-form {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Hero Section -->
        <section class="hero">
            <h1>The Language of Flowers</h1>
            <p>Discover the hidden meanings, rich symbolism, and fascinating stories behind nature's most beautiful messengers.</p>
            <div class="decorative-line"></div>
        </section>

        <!-- Flower Cards -->
        <section class="flower-grid">
            <article class="flower-card">
                <div class="flower-image roses-bg">
                    <span class="category-tag tag-love">Love</span>
                </div>
                <div class="card-content">
                    <h3 class="card-title">The Timeless Beauty of Red Roses</h3>
                    <p class="card-description">Discover the classic red rose, a flower that has captured hearts for centuries.</p>
                    <div class="card-footer">
                        <span>A Garden Expert</span>
                        <span>03/01/2024</span>
                    </div>
                    <button class="read-more">Read More</button>
                </div>
            </article>

            <article class="flower-card">
                <div class="flower-image lilies-bg">
                    <span class="category-tag tag-message">Message</span>
                </div>
                <div class="card-content">
                    <h3 class="card-title">What Do White Lilies Really Mean?</h3>
                    <p class="card-description">Explore the pure symbolism of white lilies and why they're perfect for expressing sympathy, rebirth, and new beginnings.</p>
                    <div class="card-footer">
                        <span>A Floral Historian</span>
                        <span>03/01/2024</span>
                    </div>
                    <button class="read-more">Read More</button>
                </div>
            </article>

            <article class="flower-card">
                <div class="flower-image sunflowers-bg">
                    <span class="category-tag tag-joy">Joy</span>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Sunflowers: Messages of Joy and Loyalty</h3>
                    <p class="card-description">Learn about sunflowers and their bright symbolism of loyalty and devotion, and why they make perfect gifts for brightening someone's day.</p>
                    <div class="card-footer">
                        <span>A Botanical Writer</span>
                        <span>03/01/2024</span>
                    </div>
                    <button class="read-more">Read More</button>
                </div>
            </article>
        </section>

        <!-- Newsletter Section -->
        <section class="newsletter">
            <h2>Stay Updated</h2>
            <p>Subscribe to our newsletter to receive the latest articles about the fascinating world of flowers.</p>
            <form class="email-form" onsubmit="handleSubscribe(event)">
                <input type="email" class="email-input" placeholder="Enter your email" required>
                <button type="submit" class="subscribe-btn">Subscribe</button>
            </form>
        </section>
    </div>

    <script>
        function handleSubscribe(event) {
            event.preventDefault();
            const email = event.target.querySelector('.email-input').value;
            alert('Thank you for subscribing with email: ' + email);
            event.target.reset();
        }
    </script>
</body>
</html>