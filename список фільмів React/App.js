import Header from "./Header";
import MovieCard from "./MovieCard";
import Footer from "./Footer";

function App() {
  return (
    <div>
      <Header />

      <MovieCard
        title="Interstellar"
        genre="Sci-Fi"
        rating="8.9"
      />

      <MovieCard
        title="Inception"
        genre="Action"
        rating="8.8"
      />

      <MovieCard
        title="The Dark Knight"
        genre="Drama"
        rating="9.0"
      />

      <Footer />
    </div>
  );
}

export default App;