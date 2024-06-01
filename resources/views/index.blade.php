<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background: linear-gradient(to bottom, #4CAF50, #45a049);
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
        .dotted-line {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 50%; /* Adjust the width as needed */
  height: 2px; /* Adjust the height and border-width as needed */
  background: rgba(33, 40, 48, 1);
  border-top: 2px dotted rgba(255, 255, 255, 0.5); /* Adjust the color and style as needed */
  border-bottom: 2px dotted rgba(255, 255, 255, 0.5); /* Adjust the color and style as needed */
}

/* Add padding to the pseudo-elements to separate them from the text */
.dotted-line:first-child {
  left: 0;
  padding-right: 10px; /* Adjust as needed */
}

.dotted-line:last-child {
  right: 0;
  padding-left: 10px; /* Adjust as needed */
}

    </style>
</head>
<body>

<table>
    <tr>
        <th>Column 1</th>
        <th>Column 2</th>
    </tr>
    <tr>
        <td>Row 1, Column 1</td>
        <td>Row 1, Column 2</td>
    </tr>
    <tr>
        <td>Row 2, Column 1</td>
        <td>Row 2, Column 2</td>
    </tr>
    <tr>
        <td>Row 3, Column 1</td>
        <td>Row 3, Column 2</td>
    </tr>
</table>
<p style="font-family: 'Cinzel Decorative', cursive; width: 380px; font-size: 30px; text-align: center; color: rgba(33, 40, 48, 1); position: relative;">
    <span class="dotted-line"></span>
    FEATURED COURSES
    <span class="dotted-line"></span>
  </p>

</body>
</html>
