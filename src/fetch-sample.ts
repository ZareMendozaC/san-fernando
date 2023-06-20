
export function fetchSalesPoint() {

  const formdata = new FormData()
  formdata.append("nonce", wpCredentials.security)
  formdata.append("action", "sales_points")

  fetch(wpCredentials.url, {
    method: 'POST',
    body: formdata,
  })
    .then((response) => response.json())
    .then(response => {
      console.log(response)

    })
    .catch(error => {
      console.log(error)

    })
}
