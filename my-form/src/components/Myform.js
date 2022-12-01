import { useState } from "react";

function Myform() {
  const [contact, setContact] = useState({
    name: "",
    email: "",
    isFa,
  });

  function handleInputChange(event) {
    const { name, value } = event.target;
    setContact((prevContact) => ({
      ...prevContact,
      [name]: type === "checkbox" ? checked : value,
    }));
  }

  function handleSubmit(event) {
    event.preventDefault();
  }

  console.log(contact);
  return (
    <>
      <form onSubmit={handleSubmit}>
        <div>
          <input
            name="name"
            type="text"
            placeholder="name"
            onChange={handleInputChange}
            value={contact.name}
          />
        </div>
        <div>
          <input
            name="email"
            type="text"
            placeholder="email"
            onChange={handleInputChange}
            value={contact.email}
          />
        </div>
        <div>
          <input
            name="email"
            type="checkbox"
            onChange={handleInputChange}
            value={contact.email}
          />{" "}
          Favorite Contact
        </div>

        <button>Submit</button>
      </form>
    </>
  );
}

export default Myform;
