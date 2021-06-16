<?php get_header();
//Template Name: Contact
?>


<main>
    <h2>Contact/Plan</h2>

    <section id="localisation">

        <article id="adresse">
            <img id="pin" src="http://localhost/lab/wp-content/uploads/2021/06/icone-Pin.png" alt="icone localisation">
            <img id="mascotte" src="http://localhost/lab/wp-content/uploads/2021/06/oiseau.png" alt="mascotte piou">
            <h4>Le Labyrinthe en Délire</h4>
            <p id='chaine'>Angélique CHAINE <br>

            Rue du port de la guitière<br>

            85440 Talmont Saint Hilaire<br>

            06.14.12.74.33<br>

            contact@labyrinthe-en-delire.com</p>
        </article>

        <iframe id="geolocalisation" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10994.32629822284!2d-1.6228146763577371!3d46.45698723038331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48046b14933d52e3%3A0x31f7ff9f3d69a2c6!2sLabyrinthe%20en%20D%C3%A9lire!5e0!3m2!1sfr!2sfr!4v1623420300984!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </section>


    <section id="formulaire">

        <?php echo do_shortcode( '[contact-form-7 id="86" title="Contactez-nous!"]' ); ?>

    </section>

    <span class="toTop"><a href=""><i class="fas fa-arrow-circle-up"></i></a></span>

</main>

<?php get_footer();?>
    




