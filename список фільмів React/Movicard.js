function MovieCard(props) {
  return (
    <div className="movie-card">
      <h2>{props.title}</h2>
      <p>Жанр: {props.genre}</p>
      <p>Рейтинг: {props.rating}</p>
    </div>
  );
}

export default MovieCard;