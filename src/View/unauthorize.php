<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>401 - Unauthorized Request</title>
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family:
                -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu,
                Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            background-color: #f8fafc;
            color: #334155;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        .not-found {
            max-width: 32rem;
            width: 100%;
            text-align: center;
            background-color: #ffffff;
            padding: 3rem 2rem;
            border-radius: 1rem;
            box-shadow:
                0 10px 25px -5px rgba(0, 0, 0, 0.05),
                0 8px 10px -6px rgba(0, 0, 0, 0.02);
            border: 1px solid #f1f5f9;
        }

        .not-found__code {
            font-size: 6rem;
            font-weight: 800;
            line-height: 1;
            letter-spacing: -0.05em;
            color: #ff6b00;
            margin-bottom: 1rem;
            user-select: none;
        }

        .not-found__title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.75rem;
        }

        .not-found__description {
            font-size: 1rem;
            line-height: 1.6;
            color: #64748b;
            margin-bottom: 2rem;
        }

        .not-found__actions {
            display: flex;
            gap: 0.75rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .not-found__button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.75rem 1.5rem;
            font-size: 0.95rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 0.5rem;
            transition: all 0.2s ease-in-out;
            cursor: pointer;
        }

        /* Modifiers */
        .not-found__button--primary {
            background-color: #ff6b00;
            color: #ffffff;
            /* border: 1px solid; */
        }

        .not-found__button--primary:hover {
            background-color: #4f46e5;
            border-color: #4f46e5;
            transform: translateY(-1px);
        }

        .not-found__button--secondary {
            background-color: #f8fafc;
            color: #475569;
            border: 1px solid #e2e8f0;
        }

        .not-found__button--secondary:hover {
            background-color: #f1f5f9;
            color: #0f172a;
            border-color: #cbd5e1;
        }
    </style>
</head>

<body>
    <main class="not-found">
        <div class="not-found__code">401</div>
        <h1 class="not-found__title">Unauthorized Request</h1>
        <p class="not-found__description">
            Sorry, you are restricted from viewing this page.
        </p>
        <div class="not-found__actions">
            <a href="<?= getUrl('/') ?>" class="not-found__button not-found__button--primary">Back to Home</a>
            <a
                href="javascript:history.back()"
                class="not-found__button not-found__button--secondary">Go Back</a>
        </div>
    </main>
</body>

</html>