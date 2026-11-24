path = r'C:\xampp\htdocs\machinedesign\wp-content\themes\hello-elementor\style.css'
with open(path, 'r', encoding='utf-8') as f:
    text = f.read()

# 1. Update .crew-visual-frame box-shadow and border
old_frame = """.crew-visual-frame {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  border: 1px solid #cbd5e1;
  background: #0c111a;
  width: 100%;
  min-height: 480px;
  display: flex;
  flex-direction: column;
  box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.crew-visual-frame:hover {
  border-color: #8ce70c;
  box-shadow: 0 20px 48px rgba(0, 0, 0, 0.16), 0 0 20px rgba(140, 231, 12, 0.15);
}"""

new_frame = """.crew-visual-frame {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  border: 1px solid rgba(140, 231, 12, 0.25);
  background: #0c111a;
  width: 100%;
  min-height: 480px;
  display: flex;
  flex-direction: column;
  box-shadow: 0 30px 70px -15px rgba(0, 0, 0, 0.55), 0 12px 28px -6px rgba(0, 0, 0, 0.3), 0 0 45px -8px rgba(140, 231, 12, 0.18);
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.crew-visual-frame:hover {
  border-color: #8ce70c;
  box-shadow: 0 35px 80px -15px rgba(0, 0, 0, 0.65), 0 16px 36px -6px rgba(0, 0, 0, 0.35), 0 0 55px -5px rgba(140, 231, 12, 0.3);
}"""

# 2. Update .crew-photo-img object-position
old_img = """.crew-photo-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  filter: brightness(0.92) contrast(1.06);
  transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}"""

new_img = """.crew-photo-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 85%;
  display: block;
  filter: brightness(0.98) contrast(1.04);
  transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}"""

# 3. Update responsive rules
old_resp_991 = """  .crew-visual-frame {
    min-height: 340px;
    height: 380px;
  }"""

new_resp_991 = """  .crew-visual-frame {
    min-height: 520px;
    height: auto;
    aspect-ratio: 9 / 14;
    max-height: 680px;
    margin: 0 auto;
    max-width: 480px;
  }"""

old_resp_767 = """  .crew-visual-frame {
    min-height: 280px;
    height: 300px;
  }"""

new_resp_767 = """  .crew-visual-frame {
    min-height: 480px;
    height: auto;
    aspect-ratio: 9 / 14;
    max-height: 600px;
    margin: 0 auto;
    width: 100%;
    max-width: 420px;
  }"""

text_norm = text.replace('\r\n', '\n')
for o, n, desc in [(old_frame, new_frame, "Frame shadow"), (old_img, new_img, "Image position"), (old_resp_991, new_resp_991, "Resp 991"), (old_resp_767, new_resp_767, "Resp 767")]:
    o_norm = o.replace('\r\n', '\n')
    n_norm = n.replace('\r\n', '\n')
    if o_norm in text_norm:
        text_norm = text_norm.replace(o_norm, n_norm)
        print(f"SUCCESS: Replaced {desc}")
    else:
        print(f"FAILED: {desc} not found")

with open(path, 'w', encoding='utf-8') as f:
    f.write(text_norm)
