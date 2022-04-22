Excerpt Property Extension for [Mecha](https://github.com/mecha-cms/mecha)
==========================================================================

![Code Size](https://img.shields.io/github/languages/code-size/mecha-cms/x.excerpt?color=%23444&style=for-the-badge)

---

Release Notes
-------------

### 1.1.0

 - [x] Changed the excerpt marker character which was previously a `<!-- cut -->` to `&#12;` or `&#xC;`, to be normalized into native form feed character in the output which later can be replaced with custom HTML markup by the layout maker to be used as a jump target.
 - [x] Updated for Mecha 3.0.0.

### 1.0.10

 - [./mecha-cms/mecha#96](https://github.com/mecha-cms/mecha/issues/96)

### 1.0.9

 - Return `null` where possible.

### 1.0.8

 - Small bug fixes.