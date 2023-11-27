@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Your Projects</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
            }

            .project-card {
                border: 1px solid #ccc;
                border-radius: 8px;
                padding: 16px;
                margin: 16px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            h2 {
                color: #333;
            }

            p {
                color: #666;
            }
        </style>
    </head>

    <body>

        <!-- Project 1 -->
        <div class="project-card">
            <h2>Project 1: Web Development</h2>
            <p>Description of Project 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Skills used: HTML, CSS, JavaScript</p>
        </div>

        <!-- Project 2 -->
        <div class="project-card">
            <h2>Project 2: Data Analysis</h2>
            <p>Description of Project 2. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Skills used: Python, Pandas, Matplotlib</p>
        </div>

        <!-- Project 3 -->
        <div class="project-card">
            <h2>Project 3: Mobile App Development</h2>
            <p>Description of Project 3. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            <p>Skills used: React Native, Firebase</p>
        </div>

    </body>

    </html>
@endsection
