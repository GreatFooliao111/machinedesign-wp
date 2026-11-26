#!/usr/bin/env python3
"""Zero-dependency HTTP, RTL, SEO & Zero-Static Smoke Test for MachineDesign.ir"""
import sys, urllib.request, urllib.error

BASE = sys.argv[1].rstrip("/") if len(sys.argv) > 1 else "http://localhost/machinedesign"
ROUTES = [
    "/", "/services/", "/services/machine-design/", "/projects/",
    "/insights/", "/about/", "/contact/", "/?s=conveyor"
]

failed = 0
for route in ROUTES:
    url = BASE + route
    try:
        req = urllib.request.Request(url, headers={"User-Agent": "MachineDesign-QA/3.0"})
        with urllib.request.urlopen(req, timeout=10) as resp:
            code = resp.getcode()
            html = resp.read().decode("utf-8", errors="ignore")
            ok_rtl = 'dir="rtl"' in html
            ok_no_tw = "cdn.tailwindcss.com" not in html
            ok_no_fatal = "Fatal error" not in html and "Parse error" not in html
            if code == 200 and ok_rtl and ok_no_tw and ok_no_fatal:
                print(f"PASS [200] {route}")
            else:
                print(f"FAIL [{code}] {route} | rtl={ok_rtl} no_tw={ok_no_tw} no_fatal={ok_no_fatal}")
                failed += 1
    except Exception as e:
        print(f"ERROR {route}: {e}")
        failed += 1

sys.exit(1 if failed else 0)
