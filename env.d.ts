/// <reference types="vite/client" />

declare interface GReCaptcha {
  ready(callback: () => void): void;

  execute(token: string, options: object): Promise<void>;
}

declare let grecaptcha: GReCaptcha;
