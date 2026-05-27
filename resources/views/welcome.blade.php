<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UFO Sightings</title>
	<style>
		:root {
			--bg-1: #070b1a;
			--bg-2: #111a3a;
			--neon: #62f7ff;
			--accent: #9a7bff;
			--text: #e9f0ff;
		}

		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			min-height: 100vh;
			font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
			color: var(--text);
			background:
				radial-gradient(circle at 20% 20%, rgba(98, 247, 255, 0.14), transparent 35%),
				radial-gradient(circle at 80% 30%, rgba(154, 123, 255, 0.16), transparent 30%),
				linear-gradient(165deg, var(--bg-1), var(--bg-2));
			display: grid;
			place-items: center;
			overflow: hidden;
		}

		.stars,
		.stars::before,
		.stars::after {
			position: absolute;
			inset: 0;
			content: "";
			background-image: radial-gradient(2px 2px at 10% 30%, #fff 70%, transparent 71%),
							  radial-gradient(1.5px 1.5px at 75% 20%, #fff 70%, transparent 71%),
							  radial-gradient(1.8px 1.8px at 45% 60%, #fff 70%, transparent 71%),
							  radial-gradient(1.2px 1.2px at 20% 80%, #fff 70%, transparent 71%),
							  radial-gradient(1.6px 1.6px at 88% 72%, #fff 70%, transparent 71%);
			opacity: .5;
			pointer-events: none;
		}

		.stars::before {
			transform: translateY(-30px);
			opacity: .35;
		}

		.stars::after {
			transform: translateY(20px);
			opacity: .2;
		}

		.card {
			width: min(760px, 92vw);
			background: rgba(12, 19, 42, 0.75);
			border: 1px solid rgba(98, 247, 255, 0.22);
			border-radius: 24px;
			padding: 2.6rem 2rem;
			text-align: center;
			box-shadow: 0 16px 60px rgba(0, 0, 0, 0.45), 0 0 30px rgba(98, 247, 255, 0.15);
			backdrop-filter: blur(8px);
			position: relative;
			z-index: 2;
		}

		.ufo {
			width: 180px;
			height: 90px;
			margin: 0 auto 1.3rem;
			position: relative;
			filter: drop-shadow(0 0 14px rgba(98, 247, 255, 0.55));
			animation: float 3s ease-in-out infinite;
		}

		.ufo .top {
			width: 90px;
			height: 42px;
			border-radius: 50px 50px 18px 18px;
			background: linear-gradient(180deg, #a8f5ff, #4cb6ff);
			margin: 0 auto;
			border: 2px solid rgba(255, 255, 255, 0.65);
		}

		.ufo .base {
			width: 180px;
			height: 50px;
			margin-top: -8px;
			border-radius: 50%;
			background: linear-gradient(180deg, #9ab0ff, #6e73d9 55%, #3e458e);
			border: 2px solid rgba(255, 255, 255, 0.42);
			position: relative;
		}

		.ufo .lights {
			position: absolute;
			left: 50%;
			transform: translateX(-50%);
			bottom: 8px;
			display: flex;
			gap: 10px;
		}

		.ufo .lights span {
			width: 9px;
			height: 9px;
			border-radius: 50%;
			background: #ffe66f;
			box-shadow: 0 0 8px #ffe66f;
		}

		h1 {
			margin: .3rem 0 .7rem;
			font-size: clamp(2rem, 4.5vw, 3rem);
			letter-spacing: 0.04em;
			text-transform: uppercase;
		}

		p {
			margin: 0 auto;
			max-width: 52ch;
			color: #cfe0ff;
			line-height: 1.7;
		}

		.tag {
			display: inline-block;
			margin-top: 1.4rem;
			padding: .45rem .95rem;
			border-radius: 999px;
			border: 1px solid rgba(98, 247, 255, .4);
			color: var(--neon);
			background: rgba(98, 247, 255, .08);
			font-size: .85rem;
			letter-spacing: .08em;
			text-transform: uppercase;
		}

		.beam {
			position: absolute;
			top: calc(50% + 35px);
			left: 50%;
			transform: translateX(-50%);
			width: 240px;
			height: 220px;
			background: linear-gradient(180deg, rgba(98, 247, 255, 0.38), rgba(98, 247, 255, 0));
			clip-path: polygon(46% 0, 54% 0, 100% 100%, 0 100%);
			filter: blur(1px);
			opacity: .65;
			z-index: 1;
		}

		@keyframes float {
			0%, 100% { transform: translateY(0); }
			50% { transform: translateY(-10px); }
		}
	</style>
</head>
<body>
	<div class="stars"></div>
	<div class="beam"></div>

	<main class="card">
		<div class="ufo" aria-hidden="true">
			<div class="top"></div>
			<div class="base">
				<div class="lights">
					<span></span><span></span><span></span><span></span><span></span>
				</div>
			</div>
		</div>

		<h1>UAP Watchtower</h1>
		<p>
			Welcome to the edge of the unknown. Track strange lights, decode mysterious signals,
			and keep your eyes on the skies for the next incredible close encounter.
		</p>
		<div class="tag">Area 51 • Cosmic Mode Active</div>
	</main>
</body>
</html>
