# amazingcar-2003

Archival preservation of **Amazing Car Rent-a-Car**, a car rental website from
early-2000s Islamabad, Pakistan. Original PHP source is kept intact; the site
is pre-rendered to static HTML and served from Firebase Hosting.

Production: <https://amazingcar-2003.junaid.guru>
Firebase default: <https://amazingcar-2003.web.app>

## About the site

Amazing Car Rent-a-Car operated from Office #2, Blue Area, Islamabad. The
website (circa 2002–2003, hence the repo name) advertised both self-drive
and chauffeur-drive rentals across a fleet including Pajero Intercooler,
Toyota Corolla, Honda City, Kia Spectra, Nissan Sunny, Suzuki Baleno, and
Hyundai Santro. Pricing is in Pakistani rupees, dated to the era.

## Architecture

- PHP templates in `webapp/` — untouched apart from the reservation form
  are pre-rendered to HTML via `scripts/render.sh` → `dist/`
- `firebase deploy` publishes `dist/` to Firebase Hosting (CDN, 365-day cache)
- Reservation form posts to [Formspree](https://formspree.io), no server-side PHP runs in production

## Local development

Open the repo in VS Code → **Reopen in Container** (requires Docker Desktop).

The devcontainer boots a PHP 8.3 environment and serves `webapp/` at http://localhost:5000.

To preview the pre-rendered static output (what Firebase Hosting will serve):

```bash
./scripts/render.sh
firebase emulators:start --only hosting 
```

## Deployment

Push to `main` — GitHub Actions renders the site and deploys to Firebase Hosting.

### Required GitHub secrets

| Secret         | Source                                                                               |
|----------------|--------------------------------------------------------------------------------------|
| `WIF_PROVIDER` | `terraform -chdir=firebase-cloud/terraform output -raw amazingcar_2003_wif_provider` |
| `GCP_SA_EMAIL` | `terraform -chdir=firebase-cloud/terraform output -raw amazingcar_2003_gcp_sa_email` |

### Formspree setup

1. Sign up at <https://formspree.io>, create a form named `amazingcar-2003-reservation`
2. Replace `YOUR_FORMSPREE_FORM_ID` in `webapp/reservation.php` with the real form ID
