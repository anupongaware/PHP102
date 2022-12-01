import "./App.css";
import Card from "./components/Card";

function App() {
  const cardList = [
    { header: "content 1", content: "content 1", footer: "footer 1" },
    { header: "content 2", content: "content 2", footer: "footer 2" },
    { header: "content 3", content: "content 3", footer: "footer 3" },
  ];

  return (
    <div className="App">
      {cardList &&
        cardList.map((card) => (
          <Card
            header={card.header}
            content={card.content}
            footer={card.footer}
          />
        ))}
    </div>
  );
}

export default App;
