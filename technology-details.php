<?php

  /* Template Name: Technology Details Page */

?>

<?php include 'header-tech.php';?>

<section class="technology-details">

    <div class="section-hero">

      <div class="section-hero__content">
        <h3 class="section-hero__headline--sml">The Technology</h3>
        <h1 class="section-hero__headline">More About Our Technology</h1>
      </div>
    </div>

    <div class="site-section">

        <div class="section-content">
            <div class="section-content__cell">
                <p class="site-copy">
                    American BioOptics uses a platform of complementary light-scattering screening technologies to identify manifestations of field carcinogenesis — a well-established biological phenomenon that suggests subtle and detectable abnormalities occur throughout an organ when cancer is present nearby.
                </p>
            </div>

            <div class="section-content__cell">
                <p class="site-copy">
                    We can identify field carcinogenesis with outstanding accuracy with our technology, a sophisticated platform of unique, patented light scattering technologies that allow characterization of the nanoscale architecture of the cell, and can be sensitive to particles 10-20 times smaller than seen with conventional light microscope.
                </p>
                <p class="site-copy">
                    Identification of subtle abnormalities inside the colon can help physicians recognize patients at high risk for cancer.
                </p>
            </div>
        </div>

    </div>

    <div class="technology-details__graph">
        <h1 class="site-section__headline--lrg">Scattering Angle and Intensity vs. Wavelength (nm)</h1>


        <div class="section-content">
            <div class="section-content__cell">
                <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/site-theme/assets/img/graph-1.png" alt="icon" class="section-content-icon section-content-icon--graph">
                <p class="site-copy">
                    Spectral reflection from a patient with no findings on colonoscopy
                </p>
            </div>

            <div class="section-content__cell">
                <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/site-theme/assets/img/graph-2.png" alt="icon" class="section-content-icon section-content-icon--graph">
                <p class="site-copy">
                    Spectral reflection from a patient with an advanced adenoma on colonoscopy
                </p>
            </div>
        </div>
    </div>

    <div class="site-section">

        <h1 class="site-section__headline--lrg">Pending Patents</h1>
        <p class="site-copy site-copy--lrg site-copy--spc">ABO holds an exclusive license to six pending patents on optics technologies. They include:</p>

        <div class="section-content">
            <div class="section-content__cell">
                <p class="site-copy site-copy--lrg">
                    Low Coherence Enhanced Backscatter (LEBS)
                </p>
                <p class="site-copy">
                    There are a few important things you can do now to reduce the risk of colorectal cancer in the future.
                </P>
                <p class="site-copy">
                    The United States Preventive Services Task Force recommends one of the following screening technologies for men and women, aged 50 and older:
                </p>
                <ul class="section-content__list">
                    <li class="site-copy section-content__list-item">LEBS is sensitive to changes in intracellular organization that are otherwise undetectable by histology.</li>
                    <li class="site-copy section-content__list-item">LEBS signals mostly depend on the second-order scattering of weakly localized photons by tissue structures.  This contrast mechanism is unique to LEBS and cannot be probed by existing techniques.</li>
                    <li class="site-copy section-content__list-item">LEBS enables physicians and technicians to identify potential risk for the development of cancer and its progression by sensing changes in histologically normal-appearing tissue at a distance from a cancerous lesion.</li>
                </ul>
            </div>

            <div class="section-content__cell">
                <p class="site-copy site-copy--lrg">
                    Four-dimensional Elastic Light-Scattering Fingerprinting (ELF)
                </p>
                <p class="site-copy">
                    This technology obtains comprehensive data from photons undergoing single light scattering in tissue. ELF-based techniques have been shown to allow precise localization of polyps during colonoscopy through an endoscopically compatible probe. 4-D ELF allows acquisition of light-scattering data in several dimensions. These include wavelength of light, the scattering angle, azimuthal angle of scattering and polarization of scattered light.
                </p>
            </div>
        </div>

    </div>

</section>


<?php include 'footer.php' ?>
