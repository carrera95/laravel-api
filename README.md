<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Name</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 40px;
            line-height: 1.6;
        }

        h1,
        h2,
        h3 {
            color: #333;
        }

        code {
            background-color: #f4f4f4;
            padding: 2px 5px;
            border-radius: 4px;
        }

        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 4px;
            overflow-x: auto;
        }

        section {
            margin-bottom: 20px;
        }

        .warning {
            color: #ff5733;
        }
    </style>
</head>

<body>

    <h1>Project Name</h1>

    <section>
        <h2>Description</h2>
        <p>This project focuses on managing clients and services through a database. It uses three main tables: <code>clients</code>, <code>services</code>, and <code>clients_services</code>. The first two tables, <code>clients</code> and <code>services</code>, feed the corresponding models of clients and services, while the third table, <code>clients_services</code>, acts as a pivot table to establish many-to-many relationships between the <code>clients</code> and <code>services</code> tables.</p>
    </section>

    <section>
        <h2>Project Structure</h2>
        <ul>
            <li><strong>models/</strong>
                <ul>
                    <li><code>client_model.py</code>: Defines the structure of the client model.</li>
                    <li><code>service_model.py</code>: Defines the structure of the service model.</li>
                </ul>
            </li>
            <li><strong>database/</strong>
                <ul>
                    <li><code>create_tables.sql</code>: SQL script for creating tables in the database.</li>
                    <li><code>sample_data.sql</code>: Example data script to populate the tables.</li>
                </ul>
            </li>
            <li><strong>scripts/</strong>
                <ul>
                    <li><code>populate_database.py</code>: Python script to populate the database with sample data.</li>
                </ul>
            </li>
            <li><strong>app/</strong>
                <ul>
                    <li><code>main.py</code>: Main application code.</li>
                </ul>
            </li>
        </ul>
    </section>

    <section>
        <h2>Configuration</h2>
        <ol>
            <li><strong>Database Configuration:</strong>
                <ul>
                    <li>Run the <code>create_tables.sql</code> script to create tables in your database.</li>
                    <li>Optional: Use the <code>sample_data.sql</code> script to add example data.</li>
                </ul>
            </li>
            <li><strong>Virtual Environment Setup (Optional):</strong>
                <pre>
                    virtualenv venv
                    source venv/bin/activate  # on Linux/macOS
                    # or
                    .\venv\Scripts\activate  # on Windows
                </pre>
            </li>
            <li><strong>Install Dependencies:</strong>
                <pre>
                    pip install -r requirements.txt
                </pre>
            </li>
            <li><strong>Run the Application:</strong>
                <pre>
                    python app/main.py
                </pre>
            </li>
        </ol>
    </section>

    <section>
        <h2>Usage</h2>
        <p>This project provides a basic structure for managing clients and services. Feel free to extend and adapt it to your specific needs.</p>
    </section>

    <section>
        <h2>Testing with Postman</h2>
        <p>The API endpoints can be tested using Postman. Import the provided Postman collection file <code>project.postman_collection.json</code> to explore and test the available endpoints.</p>
    </section>

    <section>
        <h2>Contributions</h2>
        <p>Contributions are welcome. If you find any issues or have improvements, feel free to open an issue or submit a pull request.</p>
    </section>

    <section>
        <h2>License</h2>
        <p>This project is licensed under the MIT License. See the <a href="LICENSE">LICENSE</a> file for more details.</p>
    </section>

</body>

</html>
