import Fuse from "fuse.js";

class Language {
  /**
   * @param {string} country
   * @param {string} language
   */
  constructor(country, language, code = "ke") {
    this.country = country;
    this.language = language;
    this.code = code;
  }
}

class LanguageUtils {
  /**
   * @param {Language[]} _languages
   */
  constructor(languages) {
    this._languages = languages;
    this._fuse = new Fuse(this._languages, {
      keys: ["language", "country"],
    });
  }

  /**
   * @param {HTMLElement} element
   * @returns {Language}
   */
  static convertToObject(element) {
    const country = element.querySelector(".country").textContent;
    const language = element.querySelector(".language").textContent;
    const codeEl = element.querySelector(".flag-icon");
    const codeClass = codeEl.classList.item(1);
    const code = codeClass.slice(-2);
    return new Language(country, language, code);
  }

  /**
   * @param {Language} language
   * @returns {Element}
   */
  static convertToElement(language) {
    const anchorEl = document.createElement("a");
    anchorEl.setAttribute("role", "button");
    anchorEl.classList.add(
      "language-selector__language",
      "js-language-selector__language"
    );

    const flagEl = document.createElement("div");
    flagEl.classList.add("flag");
    const flagIcon = document.createElement("span");
    flagIcon.classList.add("flag-icon", `flag-icon-${language.code}`);
    flagEl.append(flagIcon);

    const textEl = document.createElement("div");
    textEl.classList.add("text");
    const countryEl = document.createElement("span");
    countryEl.classList.add("country");
    countryEl.textContent = language.country;
    const languageEl = document.createElement("span");
    languageEl.classList.add("language");
    languageEl.textContent = language.language;
    textEl.append(countryEl);
    textEl.append(languageEl);

    anchorEl.append(flagEl);
    anchorEl.append(textEl);

    return anchorEl;
  }

  /**
   * @param {string} term
   * @returns {Language[]}
   */
  search(term) {
    return this._fuse.search(term).map((result) => result.item);
  }
}

/**
 * @param {Element} root
 * @param {Language[]} languages
 */
const attachToRoot = (root, languages) => {
  const elements = languages.map((lang) =>
    LanguageUtils.convertToElement(lang)
  );
  root.innerHTML = "";
  elements.forEach((el) => root.append(el));
};

/**
 * @param {Element} element
 */
export const setupLanguageSelector = (element) => {
  const searchLanguageInput = element.querySelector(".js-action__search input");
  const languageListRoot = element.querySelector(
    ".js-language-selector__list-of-languages"
  );
  const languageNodeList = element.querySelectorAll(
    ".js-language-selector__language"
  );
  const availableLanguages = Array.from(languageNodeList).map((element) =>
    LanguageUtils.convertToObject(element)
  );

  const langUtils = new LanguageUtils(availableLanguages);

  searchLanguageInput.addEventListener("input", (event) => {
    event.preventDefault();
    /**@type {HTMLInputElement} */
    const target = event.target;
    const term = target.value;

    if (!term) {
      attachToRoot(languageListRoot, availableLanguages);
      return;
    }

    const results = langUtils.search(term);

    attachToRoot(languageListRoot, results);
  });
};
