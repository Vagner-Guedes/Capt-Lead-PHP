// ==================== MAIN.JS COMPLETO ====================
document.addEventListener("DOMContentLoaded", function () {
  // ---------- COOKIE CONSENT ----------
  const cookieConsent = document.getElementById("cookieConsent");
  const acceptBtn = document.getElementById("acceptCookies");
  const rejectBtn = document.getElementById("rejectCookies");
  const customizeBtn = document.getElementById("customizeCookies");
  const cookieModal = document.getElementById("cookieModal");
  const savePrefs = document.getElementById("saveCookiePreferences");
  const closeModal = document.getElementById("closeCookieModal");
  const analyticsCheck = document.getElementById("cookieAnalytics");
  const marketingCheck = document.getElementById("cookieMarketing");

  // Função para definir cookie de consentimento
  function setCookieConsent(analytics = false, marketing = false) {
    localStorage.setItem(
      "cookie_consent",
      JSON.stringify({
        analytics: analytics,
        marketing: marketing,
        timestamp: new Date().getTime(),
      }),
    );
    // Aqui você pode habilitar/desabilitar scripts de terceiros conforme as preferências
    if (analytics) {
      // Exemplo: ativar Google Analytics (caso exista)
      console.log("Cookies analíticos ativados");
    }
    if (marketing) {
      console.log("Cookies de marketing ativados");
    }
    // Esconde o banner
    cookieConsent.style.display = "none";
  }

  // Verifica se já existe consentimento
  function checkCookieConsent() {
    const consent = localStorage.getItem("cookie_consent");
    if (!consent) {
      cookieConsent.style.display = "flex";
    } else {
      cookieConsent.style.display = "none";
      const prefs = JSON.parse(consent);
      if (prefs.analytics) {
        // ativar analytics
      }
      if (prefs.marketing) {
        // ativar marketing
      }
    }
  }

  // Aceitar todos
  if (acceptBtn) {
    acceptBtn.addEventListener("click", () => {
      setCookieConsent(true, true);
    });
  }

  // Recusar todos (apenas essenciais)
  if (rejectBtn) {
    rejectBtn.addEventListener("click", () => {
      setCookieConsent(false, false);
    });
  }

  // Abrir modal de personalização
  if (customizeBtn) {
    customizeBtn.addEventListener("click", () => {
      const consent = localStorage.getItem("cookie_consent");
      if (consent) {
        const prefs = JSON.parse(consent);
        if (analyticsCheck) analyticsCheck.checked = prefs.analytics || false;
        if (marketingCheck) marketingCheck.checked = prefs.marketing || false;
      } else {
        if (analyticsCheck) analyticsCheck.checked = false;
        if (marketingCheck) marketingCheck.checked = false;
      }
      cookieModal.style.display = "flex";
    });
  }

  // Salvar preferências personalizadas
  if (savePrefs) {
    savePrefs.addEventListener("click", () => {
      const analytics = analyticsCheck ? analyticsCheck.checked : false;
      const marketing = marketingCheck ? marketingCheck.checked : false;
      setCookieConsent(analytics, marketing);
      cookieModal.style.display = "none";
    });
  }

  // Fechar modal
  if (closeModal) {
    closeModal.addEventListener("click", () => {
      cookieModal.style.display = "none";
    });
  }

  // Fechar modal clicando fora
  if (cookieModal) {
    window.addEventListener("click", (e) => {
      if (e.target === cookieModal) {
        cookieModal.style.display = "none";
      }
    });
  }

  // Inicializar verificação
  checkCookieConsent();

  // ---------- PRELOADER ----------
  const preloader = document.querySelector(".preloader");
  if (preloader) {
    setTimeout(() => {
      preloader.style.opacity = "0";
      setTimeout(() => {
        preloader.style.display = "none";
      }, 300);
    }, 500);
  }

  // ---------- HEADER SCROLL ----------
  const header = document.querySelector(".header");
  if (header) {
    window.addEventListener("scroll", () => {
      header.classList.toggle("scrolled", window.scrollY > 50);
    });
  }

  // ---------- MENU MOBILE ----------
  const mobileMenuBtn = document.querySelector(".mobile-menu");
  const navLinks = document.querySelector(".nav-links");
  if (mobileMenuBtn && navLinks) {
    function toggleMenu() {
      navLinks.classList.toggle("active");
      const icon = mobileMenuBtn.querySelector("i");
      if (icon) {
        icon.classList.toggle(
          "fa-bars",
          !navLinks.classList.contains("active"),
        );
        icon.classList.toggle(
          "fa-times",
          navLinks.classList.contains("active"),
        );
      }
      document.body.style.overflow = navLinks.classList.contains("active")
        ? "hidden"
        : "";
    }

    mobileMenuBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      toggleMenu();
    });

    document.querySelectorAll(".nav-links a").forEach((link) => {
      link.addEventListener("click", () => {
        if (navLinks.classList.contains("active")) toggleMenu();
      });
    });

    document.addEventListener("click", (e) => {
      if (
        window.innerWidth <= 968 &&
        navLinks.classList.contains("active") &&
        !navLinks.contains(e.target) &&
        !mobileMenuBtn.contains(e.target)
      ) {
        toggleMenu();
      }
    });

    window.addEventListener("resize", () => {
      if (window.innerWidth > 968 && navLinks.classList.contains("active"))
        toggleMenu();
    });
  }

  // ---------- SMOOTH SCROLL (exclui #contato duplicado) ----------
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    const href = anchor.getAttribute("href");
    if (href === "#" || href === "#contato") return;
    const target = document.querySelector(href);
    if (target) {
      anchor.addEventListener("click", (e) => {
        e.preventDefault();
        target.scrollIntoView({ behavior: "smooth", block: "start" });
      });
    }
  });

  // ---------- AOS ----------
  if (typeof AOS !== "undefined") {
    AOS.init({ duration: 600, once: true, offset: 80 });
  }

  // ---------- CARROSSEL INFINITO (clientes) ----------
  function initCarrosselInfinito() {
    const track = document.querySelector(".carrossel-track");
    if (!track) return;
    const ajustarVelocidade = () => {
      const largura = window.innerWidth;
      let velocidade = 30;
      if (largura <= 480) velocidade = 20;
      else if (largura <= 768) velocidade = 25;
      track.style.animationDuration = `${velocidade}s`;
    };
    ajustarVelocidade();
    window.addEventListener("resize", ajustarVelocidade);
    document.addEventListener("visibilitychange", () => {
      track.style.animationPlayState = document.hidden ? "paused" : "running";
    });
  }
  initCarrosselInfinito();

  // ---------- MÍDIA KIT MODAL ----------
  const btnMidiaKit = document.getElementById("btnMidiaKit");
  const modalMidia = document.getElementById("midiaKitDropdown");
  const fecharMidia = document.getElementById("fecharMidiaKit");
  if (btnMidiaKit && modalMidia) {
    btnMidiaKit.addEventListener("click", (e) => {
      e.preventDefault();
      modalMidia.style.display = "flex";
    });
    if (fecharMidia)
      fecharMidia.addEventListener(
        "click",
        () => (modalMidia.style.display = "none"),
      );
    modalMidia.addEventListener("click", (e) => {
      if (e.target === modalMidia) modalMidia.style.display = "none";
    });
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && modalMidia.style.display === "flex")
        modalMidia.style.display = "none";
    });
  }

  // ---------- DROPDOWN DE AÇÕES ----------
  const dropdown = document.querySelector(".nav-dropdown");
  const dropdownBtn = document.getElementById("actionMenuBtn");
  if (dropdown && dropdownBtn) {
    dropdownBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      dropdown.classList.toggle("active");
    });
    document.addEventListener("click", (e) => {
      if (!dropdown.contains(e.target)) dropdown.classList.remove("active");
    });
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && dropdown.classList.contains("active"))
        dropdown.classList.remove("active");
    });
  }

  // ---------- LOGO VOLTA AO TOPO ----------
  const logo = document.querySelector(".logo");
  if (logo) {
    logo.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  // ---------- AUTOPLAY VÍDEOS (HERO E SOBRE) ----------
  const videos = document.querySelectorAll(".hero-video, .sobre-video");
  const playVideo = (video) => {
    if (video && video.paused && video.readyState >= 2) {
      video.play().catch((e) => console.log("Autoplay bloqueado:", e));
    }
  };
  videos.forEach((v) => playVideo(v));
  const firstTouchHandler = () => {
    videos.forEach((v) => playVideo(v));
    document.body.removeEventListener("touchstart", firstTouchHandler);
  };
  document.body.addEventListener("touchstart", firstTouchHandler);

  // ---------- FORMULÁRIO COM EMAILJS (movido do index.php) ----------
  const form = document.getElementById("leadFormSecure");
  const feedbackDiv = document.getElementById("formFeedback");
  if (form && feedbackDiv && typeof emailjs !== "undefined") {
    emailjs.init("cDC8368hGAhOKBJ3E"); // sua public key

    form.addEventListener("submit", async function (e) {
      e.preventDefault();
      const submitBtn = form.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;
      submitBtn.innerHTML =
        '<i class="fas fa-spinner fa-spin"></i> Enviando...';
      submitBtn.disabled = true;

      const nome = document.getElementById("nome").value;
      const email = document.getElementById("email").value;
      const whatsapp = document.getElementById("whatsapp").value;
      const empresa =
        document.getElementById("empresa").value || "Não informado";
      const solucao = document.getElementById("solucao").value;
      const dataHora = new Date().toLocaleString("pt-BR");
      const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
      const device = isMobile ? "Mobile" : "Desktop";
      const mensagemCompleta = `DADOS DO LEAD\n\nNome: ${nome}\nE-mail: ${email}\nWhatsApp: ${whatsapp}\nEmpresa: ${empresa}\nSolução: ${solucao}\nData: ${dataHora}\nDispositivo: ${device}`;

      const templateParams = {
        title: "Novo Lead - CaptLeads",
        name: nome,
        email: email,
        whatsapp: whatsapp,
        empresa: empresa,
        solucao: solucao,
        time: dataHora,
        device: device,
        message: mensagemCompleta,
      };

      try {
        const response = await emailjs.send(
          "service_29hixz3",
          "template_mxoyl6b",
          templateParams,
        );
        if (response.status === 200) {
          feedbackDiv.style.display = "block";
          feedbackDiv.style.background = "rgba(34, 197, 94, 0.15)";
          feedbackDiv.style.border = "1px solid #22c55e";
          feedbackDiv.style.color = "#22c55e";
          feedbackDiv.innerHTML =
            '<i class="fas fa-check-circle"></i> Mensagem enviada com sucesso! Em breve entraremos em contato.';
          form.reset();
          setTimeout(() => (feedbackDiv.style.display = "none"), 5000);
        } else throw new Error("Erro no envio");
      } catch (error) {
        feedbackDiv.style.display = "block";
        feedbackDiv.style.background = "rgba(239, 68, 68, 0.15)";
        feedbackDiv.style.border = "1px solid #ef4444";
        feedbackDiv.style.color = "#ef4444";
        feedbackDiv.innerHTML =
          '<i class="fas fa-exclamation-triangle"></i> Erro ao enviar. Tente novamente ou fale pelo WhatsApp: (71) 99717-2077';
      } finally {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        feedbackDiv.scrollIntoView({ behavior: "smooth", block: "nearest" });
      }
    });
  }

  // ---------- ROLAGEM CENTRALIZADA NO MOBILE (FORMULÁRIO) ----------
  const demoLink = document.querySelector('a[href="#contato"]');
  if (demoLink) {
    const targetDesktop = document.querySelector("#contato");
    const targetMobile = document.querySelector("#contatoform");
    function isMobile() {
      return window.innerWidth <= 768;
    }
    function centerElementOnScreen(element) {
      const rect = element.getBoundingClientRect();
      const elementHeight = rect.height;
      const viewportHeight = window.innerHeight;
      const scrollTop =
        window.pageYOffset || document.documentElement.scrollTop;
      const elementTopAbsolute = rect.top + scrollTop;
      let targetScroll =
        elementTopAbsolute - viewportHeight / 2 + elementHeight / 2 - 15;
      targetScroll = Math.max(0, targetScroll);
      window.scrollTo({ top: targetScroll, behavior: "smooth" });
    }
    demoLink.addEventListener("click", (e) => {
      if (isMobile() && targetMobile) {
        e.preventDefault();
        centerElementOnScreen(targetMobile);
      }
    });
  }
});

// Mensagem no console (boas-vindas)
console.log(
  "%c🚀 Capt Leads - Sua marca em movimento. Leads em tempo real!",
  "color: #10b981; font-size: 16px; font-weight: bold;",
);
