

<!DOCTYPE html>
<html>
<head>
    <title>Employee Form</title>
    <style>
        body {
            background: pink;/* Purple to Blue */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .submit-btn {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Employee Details</h2>
        <form method="POST" action="{{ route('employees.store') }}">
            @csrf
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" value="{{ old('name', $employee->name ?? '') }}">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email', $employee->email ?? '') }}">
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <input type="text" name="phone" value="{{ old('phone', $employee->phone ?? '') }}">
            </div>
            <div class="form-group">
                <label>Department:</label>
                <input type="text" name="department" value="{{ old('department', $employee->department ?? '') }}">
            </div>
            <div class="form-group">
                <label>Position:</label>
                <input type="text" name="position" value="{{ old('position', $employee->position ?? '') }}">
            </div>
            <div class="form-group">
                <label>Salary:</label>
                <input type="text" name="salary" value="{{ old('salary', $employee->salary ?? '') }}">
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>
