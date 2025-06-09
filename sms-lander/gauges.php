<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circular Percentage Gauges</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
            color: white;
        }
        
        .header {
            text-align: center;
            margin-bottom: 40px;
            max-width: 800px;
        }
        
        h1 {
            font-size: 3.5rem;
            margin-bottom: 10px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        
        .subtitle {
            font-size: 1.4rem;
            opacity: 0.9;
            margin-bottom: 30px;
        }
        
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            max-width: 1200px;
        }
        
        .gauge-container {
            position: relative;
            width: 220px;
            height: 220px;
            margin: 20px;
        }
        
        .gauge-background {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        .gauge-fill {
            position: absolute;
            width: 50%;
            height: 100%;
            right: 0;
            transform-origin: left center;
            background: currentColor;
            opacity: 0.8;
        }
        
        .gauge-fill-left {
            position: absolute;
            width: 50%;
            height: 100%;
            left: 0;
            transform-origin: right center;
            background: currentColor;
            opacity: 0.8;
            display: none;
        }
        
        .gauge-center {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: #121c36;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 2.8rem;
            font-weight: 700;
            color: white;
            box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.5);
        }
        
        .gauge-label {
            font-size: 1.1rem;
            font-weight: 500;
            margin-top: 8px;
            opacity: 0.8;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .gauge-percentage {
            display: flex;
            align-items: baseline;
        }
        
        .gauge-percentage span {
            font-size: 1.5rem;
            margin-right: 5px;
        }
        
        .gauge-info {
            position: absolute;
            bottom: -30px;
            left: 0;
            width: 100%;
            text-align: center;
            font-size: 1rem;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.9);
        }
        
        .instructions {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 15px;
            padding: 25px;
            margin-top: 40px;
            max-width: 800px;
            backdrop-filter: blur(10px);
        }
        
        .instructions h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8rem;
        }
        
        .code-block {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            padding: 20px;
            margin: 15px 0;
            font-family: 'Courier New', monospace;
            overflow-x: auto;
        }
        
        .attributes {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 20px;
        }
        
        .attribute {
            background: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 10px;
            min-width: 180px;
        }
        
        .attribute h3 {
            margin-bottom: 10px;
            color: #ffcc00;
        }
        
        @media (max-width: 768px) {
            .container {
                gap: 20px;
            }
            
            .gauge-container {
                width: 180px;
                height: 180px;
            }
            
            .gauge-center {
                width: 140px;
                height: 140px;
                font-size: 2.2rem;
            }
            
            h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1><i class="fas fa-chart-pie"></i> Circular Percentage Gauges</h1>
        <p class="subtitle">Reusable components with customizable data attributes</p>
    </div>
    
    <div class="container">
        <!-- Gauges defined with data attributes -->
        <div class="gauge-container" data-percent="85" data-color="#4CAF50" data-label="Completion">
            <div class="gauge-background">
                <div class="gauge-fill"></div>
                <div class="gauge-fill-left"></div>
            </div>
            <div class="gauge-center">
                <div class="gauge-percentage">85<span>%</span></div>
                <div class="gauge-label">Completion</div>
            </div>
            <div class="gauge-info">data-percent="75" data-color="#4CAF50"</div>
        </div>
        
        <div class="gauge-container" data-percent="35" data-color="#FF5722" data-label="Progress">
            <div class="gauge-background">
                <div class="gauge-fill"></div>
                <div class="gauge-fill-left"></div>
            </div>
            <div class="gauge-center">
                <div class="gauge-percentage">35<span>%</span></div>
                <div class="gauge-label">Progress</div>
            </div>
            <div class="gauge-info">data-percent="35" data-color="#FF5722"</div>
        </div>
        
        <div class="gauge-container" data-percent="90" data-color="#2196F3" data-label="Efficiency">
            <div class="gauge-background">
                <div class="gauge-fill"></div>
                <div class="gauge-fill-left"></div>
            </div>
            <div class="gauge-center">
                <div class="gauge-percentage">90<span>%</span></div>
                <div class="gauge-label">Efficiency</div>
            </div>
            <div class="gauge-info">data-percent="90" data-color="#2196F3"</div>
        </div>
        
        <div class="gauge-container" data-percent="60" data-color="#9C27B0" data-label="Quality">
            <div class="gauge-background">
                <div class="gauge-fill"></div>
                <div class="gauge-fill-left"></div>
            </div>
            <div class="gauge-center">
                <div class="gauge-percentage">60<span>%</span></div>
                <div class="gauge-label">Quality</div>
            </div>
            <div class="gauge-info">data-percent="60" data-color="#9C27B0"</div>
        </div>
        
        <div class="gauge-container" data-percent="82" data-color="#FFC107" data-label="Satisfaction">
            <div class="gauge-background">
                <div class="gauge-fill"></div>
                <div class="gauge-fill-left"></div>
            </div>
            <div class="gauge-center">
                <div class="gauge-percentage">82<span>%</span></div>
                <div class="gauge-label">Satisfaction</div>
            </div>
            <div class="gauge-info">data-percent="82" data-color="#FFC107"</div>
        </div>
        
        <div class="gauge-container" data-percent="45" data-color="#E91E63" data-label="Adoption">
            <div class="gauge-background">
                <div class="gauge-fill"></div>
                <div class="gauge-fill-left"></div>
            </div>
            <div class="gauge-center">
                <div class="gauge-percentage">45<span>%</span></div>
                <div class="gauge-label">Adoption</div>
            </div>
            <div class="gauge-info">data-percent="45" data-color="#E91E63"</div>
        </div>
    </div>
    
    <div class="instructions">
        <h2>How to Use These Gauges</h2>
        <p>Simply add the following HTML structure with custom data attributes:</p>
        
        <div class="code-block">
            &lt;div class="gauge-container" data-percent="<strong>YOUR_PERCENT</strong>" data-color="<strong>YOUR_COLOR</strong>" data-label="<strong>YOUR_LABEL</strong>"&gt;<br>
            &nbsp;&nbsp;&lt;div class="gauge-background"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="gauge-fill"&gt;&lt;/div&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="gauge-fill-left"&gt;&lt;/div&gt;<br>
            &nbsp;&nbsp;&lt;/div&gt;<br>
            &nbsp;&nbsp;&lt;div class="gauge-center"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="gauge-percentage"&gt;<strong>YOUR_PERCENT</strong>&lt;span&gt;%&lt;/span&gt;&lt;/div&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="gauge-label"&gt;<strong>YOUR_LABEL</strong>&lt;/div&gt;<br>
            &nbsp;&nbsp;&lt;/div&gt;<br>
            &lt;/div&gt;
        </div>
        
        <div class="attributes">
            <div class="attribute">
                <h3>data-percent</h3>
                <p>The percentage value to display (0-100)</p>
            </div>
            <div class="attribute">
                <h3>data-color</h3>
                <p>Fill color for the gauge (any valid CSS color)</p>
            </div>
            <div class="attribute">
                <h3>data-label</h3>
                <p>Text label to display below the percentage</p>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const gauges = document.querySelectorAll('.gauge-container');
            
            gauges.forEach(gauge => {
                const percent = parseInt(gauge.getAttribute('data-percent'));
                const color = gauge.getAttribute('data-color');
                const label = gauge.getAttribute('data-label');
                
                // Set gauge color
                gauge.style.color = color;
                
                // Get the fill elements
                const rightFill = gauge.querySelector('.gauge-fill');
                const leftFill = gauge.querySelector('.gauge-fill-left');
                
                // Set the percentage display
                gauge.querySelector('.gauge-percentage').innerHTML = `${percent}<span>%</span>`;
                gauge.querySelector('.gauge-label').textContent = label;
                
                // Calculate rotation angles
                if (percent > 50) {
                    leftFill.style.display = 'block';
                    rightFill.style.transform = 'rotate(180deg)';
                    leftFill.style.transform = `rotate(${(percent - 50) * 3.6}deg)`;
                } else {
                    rightFill.style.transform = `rotate(${percent * 3.6}deg)`;
                }
            });
        });
    </script>
</body>
</html>