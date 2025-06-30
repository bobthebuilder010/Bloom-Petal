<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloom & Petal - About Us</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* About Us Section */
        .about-section {
            background-color: #e8f5e8;
            padding: 60px 0;
        }

        .about-content {
            text-align: center;
        }

        .section-title {
            font-size: 2.5rem;
            color: #2c2c2c;
            margin-bottom: 20px;
            font-weight: normal;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Our Story Section */
        .story-section {
            background-color: #f8f4ff;
            padding: 80px 0;
        }

        .story-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .story-text h2 {
            font-size: 2rem;
            color: #2c2c2c;
            margin-bottom: 30px;
            font-weight: normal;
        }

        .story-text p {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 20px;
            line-height: 1.7;
        }

        .story-image {
            text-align: center;
        }

        .story-image img {
            width: 100%;
            max-width: 400px;
            height: auto;
            border-radius: 8px;
        }

        /* Placeholder for story image */
        .story-placeholder {
            width: 100%;
            height: 300px;
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZmZmIi8+CjxjaXJjbGUgY3g9IjEwMCIgY3k9IjEwMCIgcj0iMjAiIGZpbGw9IiNmZjY5YjQiLz4KPGNpcmNsZSBjeD0iMjAwIiBjeT0iMTUwIiByPSIyNSIgZmlsbD0iI2ZmNjliNCIvPgo8Y2lyY2xlIGN4PSIzMDAiIGN5PSIxMDAiIHI9IjE4IiBmaWxsPSIjZmY2OWI0Ii8+CjxjaXJjbGUgY3g9IjE1MCIgY3k9IjIwMCIgcj0iMjIiIGZpbGw9IiNmZjY5YjQiLz4KPGNpcmNsZSBjeD0iMjUwIiBjeT0iMjIwIiByPSIxNSIgZmlsbD0iI2ZmNjliNCIvPgo8L3N2Zz4=') center/cover;
            border-radius: 8px;
        }

        /* Mission Section */
        .mission-section {
            background-color: white;
            padding: 80px 0;
        }

        .mission-content {
            text-align: center;
        }

        .mission-content h2 {
            font-size: 2rem;
            color: #2c2c2c;
            margin-bottom: 30px;
            font-weight: normal;
        }

        .mission-description {
            font-size: 1rem;
            color: #666;
            max-width: 800px;
            margin: 0 auto 50px;
            line-height: 1.7;
        }

        .mission-values {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-top: 50px;
        }

        .value-item {
            text-align: center;
        }

        .value-number {
            width: 50px;
            height: 50px;
            background-color: #e8f4fd;
            border: 2px solid #4a90e2;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            font-weight: bold;
            color: #4a90e2;
            margin: 0 auto 20px;
        }

        .value-title {
            font-size: 1.3rem;
            color: #2c2c2c;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .value-description {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.6;
        }

        /* Team Section */
        .team-section {
            background-color: white;
            padding: 80px 0;
        }

        .team-content h2 {
            font-size: 2rem;
            color: #2c2c2c;
            text-align: center;
            margin-bottom: 60px;
            font-weight: normal;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }

        .team-member {
            text-align: center;
        }

        .member-photo {
            width: 200px;
            height: 250px;
            margin: 0 auto 20px;
            border-radius: 8px;
            overflow: hidden;
        }

        .member-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Placeholder photos */
        .photo-emma {
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjI1MCIgdmlld0JveD0iMCAwIDIwMCAyNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIyMDAiIGhlaWdodD0iMjUwIiBmaWxsPSIjZjBmMGYwIi8+CjxjaXJjbGUgY3g9IjEwMCIgY3k9IjgwIiByPSIzMCIgZmlsbD0iI2RkZCIvPgo8cGF0aCBkPSJNNTAgMTgwIEM1MCA1MCA5MCA1MCAyMDAgMTgwIiBmaWxsPSIjZGRkIi8+Cjx0ZXh0IHg9IjEwMCIgeT0iMjMwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjOTk5IiBmb250LXNpemU9IjEyIj5FbW1hPC90ZXh0Pgo8L3N2Zz4=') center/cover;
        }

        .photo-michael {
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjI1MCIgdmlld0JveD0iMCAwIDIwMCAyNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIyMDAiIGhlaWdodD0iMjUwIiBmaWxsPSIjZjBmMGYwIi8+CjxjaXJjbGUgY3g9IjEwMCIgY3k9IjgwIiByPSIzMCIgZmlsbD0iI2RkZCIvPgo8cGF0aCBkPSJNNTAgMTgwIEM1MCA1MCA5MCA1MCAyMDAgMTgwIiBmaWxsPSIjZGRkIi8+Cjx0ZXh0IHg9IjEwMCIgeT0iMjMwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjOTk5IiBmb250LXNpemU9IjEyIj5NaWNoYWVsPC90ZXh0Pgo8L3N2Zz4=') center/cover;
        }

        .photo-sarah {
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjI1MCIgdmlld0JveD0iMCAwIDIwMCAyNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIyMDAiIGhlaWdodD0iMjUwIiBmaWxsPSIjZjBmMGYwIi8+CjxjaXJjbGUgY3g9IjEwMCIgY3k9IjgwIiByPSIzMCIgZmlsbD0iI2RkZCIvPgo8cGF0aCBkPSJNNTAgMTgwIEM1MCA1MCA5MCA1MCAyMDAgMTgwIiBmaWxsPSIjZGRkIi8+Cjx0ZXh0IHg9IjEwMCIgeT0iMjMwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjOTk5IiBmb250LXNpemU9IjEyIj5TYXJhaDwvdGV4dD4KPC9zdmc+') center/cover;
        }

        .member-name {
            font-size: 1.3rem;
            color: #2c2c2c;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .member-title {
            font-size: 0.9rem;
            color: #ff69b4;
            margin-bottom: 15px;
            font-weight: normal;
        }

        .member-description {
            font-size: 0.85rem;
            color: #666;
            line-height: 1.6;
        }

        /* CTA Section */
        .cta-section {
            background-color: #ff69b4;
            padding: 60px 0;
            text-align: center;
        }

        .cta-content h2 {
            font-size: 2rem;
            color: white;
            margin-bottom: 20px;
            font-weight: normal;
        }

        .cta-content p {
            font-size: 1rem;
            color: white;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 4px;
            font-size: 0.9rem;
            cursor: pointer;
            text-transform: uppercase;
            font-weight: bold;
        }

        .btn-primary {
            background-color: white;
            color: #ff69b4;
        }

        .btn-secondary {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .story-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .mission-values {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .team-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- About Us Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <h1 class="section-title">About Us</h1>
                <p class="section-subtitle">Our story, mission, and the passion behind our flowers.</p>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="story-section">
        <div class="container">
            <div class="story-content">
                <div class="story-text">
                    <h2>Our Story</h2>
                    <p>Bloom & Petal was founded in 2010 with a simple vision: to bring the beauty and emotion of flowers to every corner. What started as a small corner shop has blossomed into a beloved boutique flower shop known for quality, creativity, and exceptional service.</p>
                    <p>Our founder, always passionate and inspired, developed the passion for floral arrangements at a young age, spending hours in the greenhouse, learning horticulture and working with master florists across Europe. She brought her expertise and artistic vision back to her hometown to create Bloom & Petal.</p>
                    <p>Today, we're proud to serve our community with hand-crafted arrangements for every occasion, from everyday moments to life's most special celebrations.</p>
                </div>
                <div class="story-image">
                    <div class="story-placeholder"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission Section -->
    <section class="mission-section">
        <div class="container">
            <div class="mission-content">
                <h2>Our Mission</h2>
                <p class="mission-description">At Bloom & Petal, our mission is to spread joy and beauty through thoughtfully curated floral arrangements. We believe that flowers have the power to uplift spirits, express emotions, and create meaningful connections.</p>
                
                <div class="mission-values">
                    <div class="value-item">
                        <div class="value-number">1</div>
                        <h3 class="value-title">Quality</h3>
                        <p class="value-description">We source only the freshest flowers from trusted local growers with decades of commitment to sustainability and excellence.</p>
                    </div>
                    <div class="value-item">
                        <div class="value-number">2</div>
                        <h3 class="value-title">Creativity</h3>
                        <p class="value-description">Our talented designers create beautiful arrangements that reflect both classic traditions and contemporary trends.</p>
                    </div>
                    <div class="value-item">
                        <div class="value-number">3</div>
                        <h3 class="value-title">Connection</h3>
                        <p class="value-description">We help our customers create memorable moments through the language of flowers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet Our Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="team-content">
                <h2>Meet Our Team</h2>
                <div class="team-grid">
                    <div class="team-member">
                        <div class="member-photo photo-emma"></div>
                        <h3 class="member-name">Emma Johnson</h3>
                        <p class="member-title">Founder & Head Designer</p>
                        <p class="member-description">With over 15 years of experience in floral design, Emma leads our creative vision and oversees all special event arrangements.</p>
                    </div>
                    <div class="team-member">
                        <div class="member-photo photo-michael"></div>
                        <h3 class="member-name">Michael Chen</h3>
                        <p class="member-title">Master Floral Designer</p>
                        <p class="member-description">Michael specializes in contemporary arrangements and brings a modern artistic flair to our flower collections.</p>
                    </div>
                    <div class="team-member">
                        <div class="member-photo photo-sarah"></div>
                        <h3 class="member-name">Sarah Williams</h3>
                        <p class="member-title">Customer Relations Manager</p>
                        <p class="member-description">Sarah ensures we source the highest quality blooms and maintains relationships with our network of passionate growers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Experience the Bloom & Petal Difference</h2>
                <p>Whether you're celebrating a special occasion or simply want to brighten someone's day, our flowers are crafted with care and delivered with love.</p>
                <div class="cta-buttons">
                    <button class="btn btn-primary" onclick="handleOrderNow()">Order Now</button>
                    <button class="btn btn-secondary" onclick="handleContact()">Contact Us</button>
                </div>
            </div>
        </div>
    </section>

    <script>
        function handleOrderNow() {
            alert('Redirecting to our online catalog...');
        }

        function handleContact() {
            alert('Opening contact form...');
        }
    </script>
</body>
</html>