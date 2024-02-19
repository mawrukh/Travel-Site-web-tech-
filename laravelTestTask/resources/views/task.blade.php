<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Draggable Area</title>
<style>
  /* CSS for styling */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f0f0;
  }

  .container {
    position: relative;
    width: 500px;
    height: 500px;
    border: 2px dotted #999;
    margin-right: 20px;
    overflow: hidden;
  }

  .button-container {
    display: flex;
    flex-direction: column;
    position: relative;
  }

  .button {
    margin-bottom: 10px;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .button:hover {
    background-color: #0056b3;
  }
  .close-button {
    position: absolute;
    top: 0;
    right: 0;
    padding: 5px;
    cursor: pointer;
    background-color: transparent;
    border: none;
    color: #999;
    font-size: 12px;
  }

  .close-button1 {
    position: absolute;
    top: 0;
    right: 0;
    padding: 5px;
    cursor: pointer;
    background-color: transparent;
    border: none;
    color: #999;
    font-size: 12px;
  }

  .close-button1:hover {
    color: #333;
  }

  .form-header {
    font-size: 20px;
    margin-bottom: 10px;
  }

  .form-buttons {
    margin-bottom: 20px;
  }
  .form-container {
    position: relative; /* Added position relative */
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
  }

  .label {
    font-weight: bold;
    margin-bottom: 5px;
  }

  .input-field {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }

  .radio-input-container {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
  }

  .radio-input-container input[type="radio"] {
    margin-right: 10px;
  }

</style>
</head>
<body>
<div class="container" id="draggableArea" draggable="true"></div>
<div class="button-container" id="buttonContainer">
  <button class="button" onclick="showFormElements()">Add Form Elements</button>
  <button class="button" onclick="preview()">Preview</button>
</div>

<script>
  // JavaScript for functionality
  var originalButtons = document.getElementById('buttonContainer').innerHTML;

  function showFormElements() {
    var buttonContainer = document.getElementById('buttonContainer');
    buttonContainer.innerHTML = `
      <div class="form-header">Form Elements</div>
      <div class="form-buttons">
        <button class="button" draggable="true" ondragstart="drag(event, 'shortText')">Short Text</button>
        <button class="button" draggable="true" ondragstart="drag(event, 'radioButton')">Radio Button</button>
      </div>
      <button class="close-button" onclick="goBack()">X</button>
    `;
  }

  function goBack() {
    var buttonContainer = document.getElementById('buttonContainer');
    buttonContainer.innerHTML = originalButtons;
  }

  function addShortText() {
    // Add your logic to add short text form element to the draggable area
    alert("Short Text form element will be added to the draggable area");
  }

  function addRadioButton() {
    // Add your logic to add radio button form element to the draggable area
    alert("Radio Button form element will be added to the draggable area");
  }

  function preview() {
    // Add your logic to preview the content of the draggable area
    alert("Preview functionality will be implemented here");
  }

  function drag(ev, type) {
    ev.dataTransfer.setData("text", type);
  }

  document.getElementById("draggableArea").addEventListener("dragover", function(event) {
    event.preventDefault();
  });

  document.getElementById("draggableArea").addEventListener("drop", function(event) {
    event.preventDefault();
    var type = event.dataTransfer.getData("text");
    var draggableArea = document.getElementById("draggableArea");

    if (type === 'shortText') {
      var container = document.createElement('div');
      container.classList.add('form-container');
      var header = document.createElement('div');
      header.classList.add('form-header');
      header.innerHTML = `
        <span>Short Text</span>
        <button class="close-button1" onclick="removeContainer(event)">&times;</button>
      `;
      container.appendChild(header);
      
      var inputField = document.createElement('input');
      inputField.classList.add('input-field');
      inputField.setAttribute('type', 'text');
      inputField.setAttribute('placeholder', 'Type your question here'); // Placeholder text
      container.appendChild(inputField);

      var inputField = document.createElement('input');
      inputField.classList.add('input-field');
      inputField.setAttribute('type', 'text');
      inputField.setAttribute('placeholder', 'Type text(description) here'); // Placeholder text
      container.appendChild(inputField);

      var editSettings = document.createElement('div');
      editSettings.classList.add('edit-settings');
      editSettings.textContent = 'Edit Settings';
      container.appendChild(editSettings);

      var toggleContainer1 = document.createElement('div');
      var requiredLabel = document.createElement('span');
      toggleContainer1.appendChild(requiredLabel);
      var toggle1 = document.createElement('input');
      toggle1.setAttribute('type', 'checkbox');
      requiredLabel.textContent = 'Required';
      toggleContainer1.appendChild(toggle1);
      container.appendChild(toggleContainer1);

      var toggleContainer2 = document.createElement('div');
      var maxCharactersLabel = document.createElement('span');
      toggleContainer2.appendChild(maxCharactersLabel);
      var toggle2 = document.createElement('input');
      toggle2.setAttribute('type', 'checkbox');
      maxCharactersLabel.textContent = 'Max Characters';
      toggleContainer2.appendChild(toggle2);
      container.appendChild(toggleContainer2);

      draggableArea.appendChild(container);
    } else if (type === 'radioButton') {
      var container = document.createElement('div');
      container.classList.add('form-container');
      var header = document.createElement('div');
      header.classList.add('form-header');
      header.innerHTML = `
        <span>Radio Button</span>
        <button class="close-button1" onclick="removeContainer(event)">&times;</button>
      `;
      container.appendChild(header);
      
      var inputField = document.createElement('input');
      inputField.classList.add('input-field');
      inputField.setAttribute('type', 'text');
      inputField.setAttribute('placeholder', 'Type your question here'); // Placeholder text
      container.appendChild(inputField);

      var inputField = document.createElement('input');
      inputField.classList.add('input-field');
      inputField.setAttribute('type', 'text');
      inputField.setAttribute('placeholder', 'Type text(description) here'); // Placeholder text
      container.appendChild(inputField);

      for (var i = 1; i <= 4; i++) {
        var radioInputContainer = document.createElement('div');
        radioInputContainer.classList.add('radio-input-container');

        var radioButton = document.createElement('input');
        radioButton.setAttribute('type', 'radio');
        radioButton.setAttribute('name', 'radioButtons');
        radioInputContainer.appendChild(radioButton);

        var inputField = document.createElement('input');
        inputField.classList.add('input-field');
        inputField.setAttribute('type', 'text');
        inputField.setAttribute('placeholder', 'Type option ' + i);
        radioInputContainer.appendChild(inputField);

        container.appendChild(radioInputContainer);
      }

      draggableArea.appendChild(container);
    }
    saveState(); // Save the state after changes
  });

  function removeContainer(event) {
    event.target.closest('.form-container').remove();
    saveState(); // Save the state after changes
  }

  // Function to save the state of the draggable area
  function saveState() {
    var draggableArea = document.getElementById("draggableArea");
    var htmlContent = draggableArea.innerHTML;
    localStorage.setItem("draggableAreaContent", htmlContent);
  }

  // Function to load the state of the draggable area
  function loadState() {
    var draggableArea = document.getElementById("draggableArea");
    var htmlContent = localStorage.getItem("draggableAreaContent");
    if (htmlContent) {
      draggableArea.innerHTML = htmlContent;
    }
  }

  // Load the state when the page loads
  window.onload = function() {
    loadState();
  };

//   function sendDataToBackend(formData) {
//     fetch('/saveFormData', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//         },
//         body: JSON.stringify({ formData: formData }),
//     })
//     .then(response => {
//         if (response.ok) {
//             console.log('Form data sent successfully');
//             return response.json(); 
//         } else {
//             throw new Error('Error sending form data');
//         }
//     })
//     .then(data => {
//         console.log(data); 
//     })
//     .catch(error => {
//         console.error('Error sending form data:', error);
//     });
//   }
</script>
</body>
</html>
