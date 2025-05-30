<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
    <link rel="stylesheet" href="./styles/header_footer.css" />
    <link rel="stylesheet" href="./styles/poker.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png" />
</head>
<body>
    <?php include 'header.php'; ?>
    <main class="bloque-principal">
        <h1>Fundamentos del Póker: Reglas, Mecánica y Estrategia Inicial</h1>
        <img class="img-destacada" src="./img/fundamentos.jpeg" alt="Imagen destacada sobre poker" loading="lazy" />
        <p class="parrafo"><strong>Una Guía Detallada de Poker Royal para Dominar las Bases del Juego</strong></p>
        <section>
        <p class="parrafo">
            En Poker Royal hemos preparado esta guía para ofrecerte un entendimiento claro y exhaustivo de las reglas fundamentales, la mecánica del juego y los conceptos estratégicos esenciales del póker. Continuando desde nuestra <em>Introducción al Póker</em>, este conocimiento es crucial para cualquier persona que desee jugar con confianza y tomar decisiones informadas en la mesa. Dominar estos fundamentos es el cimiento sobre el cual construirás tu habilidad y disfrutarás plenamente de este apasionante juego.
        </p>
        </section>

        <section>
        <h2>I. El Objetivo del Juego en el Póker</h2>
        <article>
            <p class="parrafo">El objetivo principal en cualquier variante de póker es ganar el <strong>bote</strong> (en inglés, "pot"), que es la suma total de todas las apuestas realizadas por los jugadores durante una mano. Hay dos formas principales de conseguirlo:</p>
            <ul>
            <li><strong>Mostrar la mejor mano:</strong> Al final de la mano, en una fase conocida como "showdown", los jugadores que aún permanezcan activos muestran sus cartas. Aquel con la combinación de cartas de mayor valor, según el ranking estándar de manos de póker, gana el bote.</li>
            <li><strong>Hacer que los oponentes se retiren (fold):</strong> Un jugador también puede ganar el bote si realiza una apuesta que ningún otro oponente está dispuesto a igualar, obligándolos a retirarse de la mano ("fold"). En este caso, el jugador gana el bote sin necesidad de mostrar sus cartas. Esta es la base del farol (bluff).</li>
            </ul>
        </article>
        </section>

        <section>
        <h2>II. Elementos Esenciales de la Partida</h2>

        <article>
            <h3>A. La Baraja</h3>
            <p class="parrafo">El póker se juega comúnmente con una baraja estándar inglesa de 52 cartas, sin comodines (jokers). La baraja se compone de cuatro palos: <strong>picas (♠), corazones (♥), diamantes (♦) y tréboles (♣)</strong>. Cada palo contiene 13 cartas, ordenadas de mayor a menor valor generalmente así: As (A), Rey (K), Reina (Q), Jota (J), 10, 9, 8, 7, 6, 5, 4, 3, 2. El As puede actuar como la carta más alta o la más baja para formar una escalera (A-2-3-4-5).</p>
        </article>

        <article>
            <h3>B. Las Fichas (Chips)</h3>
            <p class="parrafo">En lugar de dinero en efectivo, en el póker se utilizan fichas (chips) para representar valores monetarios y facilitar las apuestas. Generalmente, las fichas de diferentes colores corresponden a distintos valores denominacionales. El conjunto de fichas que posee un jugador se conoce como su "stack".</p>
        </article>

        <article>
            <h3>C. El Repartidor (Dealer) y el Botón (Button)</h3>
            <p class="parrafo">El "botón del dealer" (o simplemente "botón") es un marcador que indica quién es el repartidor nominal de la mano. Este botón se mueve en el sentido de las agujas del reloj al siguiente jugador después de cada mano. La posición del botón es crucial, ya que determina el orden de las apuestas y la ubicación de las apuestas obligatorias llamadas "ciegas".</p>
            <p class="parrafo">En partidas caseras, el jugador con el botón puede ser quien físicamente reparte las cartas. En casinos y salas de póker, hay un crupier profesional que reparte todas las manos, pero el botón sigue moviéndose para designar el orden de juego.</p>
        </article>
        
        <article>
            <h3>D. Las Ciega (Blinds)</h3>
            <p class="parrafo">Antes de que se repartan las cartas en variantes como Texas Hold'em y Omaha, dos jugadores deben realizar apuestas obligatorias llamadas "ciegas". Estas aseguran que haya dinero en el bote desde el inicio de la mano.</p>
            <ul>
                <li><strong>Ciega Pequeña (Small Blind):</strong> La realiza el jugador inmediatamente a la izquierda del botón.</li>
                <li><strong>Ciega Grande (Big Blind):</strong> La realiza el jugador inmediatamente a la izquierda de la ciega pequeña. Usualmente es el doble de la ciega pequeña.</li>
            </ul>
            <p class="parrafo">Estas apuestas también inician la primera ronda de acción.</p>
        </article>
        </section>

        <section>
        <h2>III. Ranking de Manos (Clasificación de Jugadas)</h2>
        <p class="parrafo">Conocer la jerarquía de las manos de póker es fundamental, ya que determina quién gana en el showdown. Las combinaciones se forman con cinco cartas. A continuación, se presentan de mayor a menor valor:</p>
        <img class="img-central" src="./img/rankingPoker.jpg" alt="Infografía profesional con ejemplos visuales de cada jugada de póker, desde la Escalera Real hasta la Carta Más Alta." loading="lazy" />
        <article>
            <h3>Nota sobre Desempates (Kickers)</h3>
            <p class="parrafo">Cuando dos o más jugadores tienen la misma jugada principal (por ejemplo, una pareja o un trío), el desempate se resuelve utilizando las cartas restantes en su mano de cinco cartas, conocidas como "kickers". La carta kicker más alta gana. Si esa también empata, se compara la siguiente, y así sucesivamente. Si todas las cartas son idénticas en valor, el bote se reparte.</p>
            <p class="parrafo"><em>Ejemplo: Jugador 1 tiene A♥ K♠ y Jugador 2 tiene A♣ Q♦. En la mesa hay A♦ 8♠ 5♣ 2♥ 7♦. Ambos jugadores tienen una pareja de Ases. El kicker del Jugador 1 es el Rey (K♠), y el del Jugador 2 es la Reina (Q♦). Gana el Jugador 1.</em></p>
        </article>
        </section>

        <section>
        <h2>IV. Desarrollo de una Mano en Texas Hold'em</h2>
        <p class="parrafo">Texas Hold'em es la variante de póker más popular. Así se desarrolla una mano típica:</p>
        <article>
            <h3>A. Preflop</h3>
            <p class="parrafo">Después de que las ciegas pequeña y grande hayan sido puestas, cada jugador recibe dos cartas privadas boca abajo (conocidas como "hole cards" o "cartas de mano"). Comienza la primera ronda de apuestas, iniciando por el jugador a la izquierda de la ciega grande. Los jugadores pueden retirarse, igualar la ciega grande o subir la apuesta.</p>
        </article>

        <article>
            <h3>B. Flop</h3>
            <p class="parrafo">Una vez completada la ronda de apuestas preflop, se descarta la primera carta del mazo (se "quema") y luego se reparten tres cartas comunitarias boca arriba en el centro de la mesa. Estas cartas son el "flop". Sigue una segunda ronda de apuestas, comenzando por el primer jugador activo a la izquierda del botón.</p>
        </article>

        <article>
            <h3>C. Turn (Cuarta Calle)</h3>
            <p class="parrafo">Tras la ronda de apuestas del flop, se quema otra carta y se revela una cuarta carta comunitaria: el "turn". A continuación, tiene lugar una tercera ronda de apuestas, siguiendo el mismo orden que en el flop.</p>
        </article>

        <article>
            <h3>D. River (Quinta Calle)</h3>
            <p class="parrafo">Se quema una última carta y se revela la quinta y última carta comunitaria: el "river". Le sigue la cuarta y última ronda de apuestas, con el mismo procedimiento.</p>
        </article>

        <article>
            <h3>E. Showdown (Muestra de Cartas)</h3>
            <p class="parrafo">Si después de la última ronda de apuestas quedan dos o más jugadores activos, se llega al "showdown". Los jugadores muestran sus dos cartas privadas y, utilizando la mejor combinación posible de sus dos cartas y las cinco cartas comunitarias, se forma la mejor mano de cinco cartas. El jugador con la mano de mayor ranking gana el bote. Si hay un empate, el bote se divide.</p>
        </article>
        </section>

        <section>
        <h2>V. Acciones del Jugador Durante las Rondas de Apuestas</h2>
        <img class="img-central" src="./img/ganarpartida.jpeg" alt="Infografía profesional con ejemplos visuales de cada jugada de póker, desde la Escalera Real hasta la Carta Más Alta." loading="lazy" />
        <p class="parrafo">En su turno, un jugador tiene varias opciones:</p>
        <ul>
            <li><strong>Pasar (Check):</strong> Si no ha habido apuestas previas en la ronda actual, un jugador puede pasar, cediendo la acción al siguiente jugador sin apostar nada.</li>
            <li><strong>Apostar (Bet):</strong> Si nadie ha apostado aún en la ronda actual, un jugador puede ser el primero en hacerlo.</li>
            <li><strong>Retirarse (Fold):</strong> Un jugador puede renunciar a su mano y al bote acumulado hasta el momento. Sus cartas se descartan y no participa más en la mano.</li>
            <li><strong>Igualar (Call):</strong> Un jugador puede igualar la apuesta más alta realizada hasta el momento en la ronda actual para permanecer en la mano.</li>
            <li><strong>Subir (Raise):</strong> Un jugador puede aumentar la apuesta actual. Esto requiere igualar la apuesta previa y luego añadir una cantidad adicional.</li>
            <li><strong>Resubir (Re-raise):</strong> Si un jugador ha subido una apuesta, otro jugador puede volver a subirla.</li>
            <li><strong>Ir con Todo (All-in):</strong> Un jugador apuesta todas sus fichas restantes. Si otros jugadores tienen más fichas, pueden igualar o subir hasta la cantidad del all-in. Se crea un bote principal con lo que el jugador all-in puede ganar, y botes secundarios si otros jugadores siguen apostando más.</li>
        </ul>
        </section>

        <section>
        <h2>VI. Conceptos Estratégicos Iniciales</h2>
        <p class="parrafo">Más allá de las reglas, el póker es un juego de estrategia. Aquí algunos conceptos básicos para empezar:</p>
        <article>
            <h3>A. La Importancia de la Posición</h3>
            <p class="parrafo">Tu posición en la mesa (dónde te sientas en relación con el botón) es fundamental. Actuar en las últimas posiciones (cerca del botón) te da la ventaja de ver cómo han actuado tus oponentes antes de tomar tu decisión, proporcionándote más información.</p>
        </article>

        <article>
            <h3>B. Selección de Manos Iniciales</h3>
            <p class="parrafo">No todas las manos iniciales tienen el mismo valor. Aprender qué manos son fuertes y cuáles es mejor descartar (fold) preflop es crucial. Generalmente, querrás jugar manos que tengan buen potencial para formar jugadas fuertes. Tu selección de manos también debe adaptarse a tu posición y al estilo de tus rivales.</p>
        </article>

        <article>
            <h3>C. Agresividad Selectiva</h3>
            <p class="parrafo">El póker tiende a recompensar la agresividad controlada (apostar y subir) en lugar de la pasividad (pasar e igualar). Ser selectivamente agresivo con manos fuertes o en situaciones donde un farol tiene posibilidades de éxito puede hacer que tus oponentes se retiren, permitiéndote ganar botes sin necesidad de llegar al showdown.</p>
        </article>

        <article>
            <h3>D. Observación de los Oponentes</h3>
            <p class="parrafo">Presta atención constante a tus oponentes: cómo apuestan, qué tipos de manos juegan, con qué frecuencia se retiran, si farolean mucho, etc. Identificar sus patrones de juego (tells, tendencias) te dará una ventaja significativa para explotar sus debilidades.</p>
        </article>

        <article>
            <h3>E. Gestión de Capital (Bankroll Management)</h3>
            <p class="parrafo">Es vital jugar dentro de tus posibilidades económicas. Define un "bankroll" (capital total destinado exclusivamente al póker) y no arriesgues en una sola sesión o torneo una porción tan grande que su pérdida te afecte significativamente. Juega en niveles de apuestas donde te sientas cómodo y tu bankroll pueda soportar las inevitables fluctuaciones (varianza) del juego.</p>
        </article>
        </section>
        <p class="parrafo"><strong>Conclusión:</strong> Estos fundamentos son tu pasaporte para comenzar a jugar al póker con una base sólida. Entender las reglas, el flujo del juego y los principios estratégicos básicos te permitirá tomar mejores decisiones y disfrutar más de cada partida. ¡En Poker Royal te animamos a practicar y seguir aprendiendo para desarrollar continuamente tus habilidades!</p>

    </main>
    <?php include 'footer.php'; ?>
</body></html>
