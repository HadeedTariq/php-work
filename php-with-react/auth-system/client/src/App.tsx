import axios from "axios";
import { useEffect } from "react";

const App = () => {
  useEffect(() => {
    const values = {
      name: "Hadeed",
      email: "hadeed12@gmail.com",
      body: "Hello dear",
    };
    axios
      .post("http://localhost:3000/server/index.php", values)
      .then((res) => console.log(res.data));
  }, []);
  return <div></div>;
};

export default App;
